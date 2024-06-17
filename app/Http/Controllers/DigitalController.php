<?php

namespace App\Http\Controllers;

use App\Models\Digital;
use App\Models\procedimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function cargar($id)
    {

        $resultados = DB::table('soportes')
            ->select(
                DB::raw("CASE 
                WHEN (canales_atencion IS NULL OR canales_atencion = '') 
                  OR (nivel_digitalizacion = 'Nivel 5' AND (fecha_digitalizacion IS NULL OR fecha_digitalizacion = '')) 
                  OR (nivel_digitalizacion <> 'Nivel 0' AND (chile_atiende IS NULL OR chile_atiende = '' OR url_inicio IS NULL OR url_inicio = ''))
                THEN TRUE 
                ELSE FALSE 
             END AS es_vacio")
            )
            ->where('id_procedimiento', $id)
            ->first();

        $nivel = DB::table('soportes')
            ->select(
                DB::raw("CASE 
                WHEN nivel_digitalizacion IS NOT NULL AND nivel_digitalizacion <> 'Nivel 0'
                THEN TRUE 
                ELSE FALSE 
             END AS nivel_0")
            )
            ->where('id_procedimiento', $id)
            ->first();

        $marco_verifi = DB::table('marcos')
            ->select(
                DB::raw("CASE 
                WHEN (n_ley IS NULL OR n_ley = '' OR url_ley IS NULL OR url_ley= '' OR fuentes_normativas IS NULL OR fuentes_normativas = ''  )
                OR (fuentes_normativas = 'SI' and (tipo_fuente IS NULL OR tipo_fuente = '' OR nombre_fuente IS NULL OR nombre_fuente = '' OR url_fuente IS NULL OR url_fuente = ''  ))
                THEN TRUE 
                ELSE FALSE 
                END AS marco_vacio")
            )->where('id_procedimiento', $id)
            ->first();

        $usuario_verifi = DB::table('usuarios')
            ->select(
                DB::raw("CASE 
                WHEN (pago_asociado IS NULL OR pago_asociado = '' OR tipo_usuario IS NULL OR tipo_usuario = '' OR segmento_usuario IS NULL OR segmento_usuario = '' OR registro_social IS NULL OR registro_social = '' OR disponibilidad IS NULL OR disponibilidad = '')
                OR (pago_asociado = 'Si' AND (tipo_moneda IS NULL OR tipo_moneda = '' OR monto_pagar IS NULL OR monto_pagar = ''))
                OR (pago_asociado = 'En algunos casos' AND (tipo_moneda IS NULL OR tipo_moneda = '' OR monto_pagar IS NULL OR monto_pagar = ''))
                THEN TRUE 
                ELSE FALSE 
                END AS usuario_vacio")
            )->where('id_procedimiento', $id)
            ->first();

        $digital_verifi = DB::table('digitals')
            ->select(
                DB::raw("CASE 
                WHEN (SELECT nivel_digitalizacion FROM soportes WHERE id_procedimiento = $id) = 'Nivel 0' THEN FALSE
                ELSE autenticacion IS NULL OR autenticacion = '' OR mecanismos IS NULL OR mecanismos = '' OR firma_electronica IS NULL OR firma_electronica = ''
            END AS digital_vacio")
            )->where('id_procedimiento', $id)
            ->first();

        $noti_verifi = DB::table('notificacions')
            ->select(
                DB::raw("CASE 
            WHEN (noti_practicadas IS NULL OR noti_practicadas = '' OR medio_envio_comuni IS NULL OR medio_envio_comuni = '' OR medio_envio_personales IS NULL OR medio_envio_personales = '' )
            OR (noti_practicadas = 'Si' AND (etapas_notificaciones IS NULL OR etapas_notificaciones = '' OR medio_notificacion IS NULL OR medio_notificacion= '' ))
            THEN TRUE 
            ELSE FALSE 
            END AS noti_vacio")
            )->where('id_procedimiento', $id)
            ->first();

        $dato_verifi = DB::table('datos')
            ->select(
                DB::raw("CASE 
            WHEN (expediente_otro_organo IS NULL OR expediente_otro_organo = '' OR doc_notarial IS NULL OR doc_notarial = '' OR enviar_comunicaciones IS NULL OR enviar_comunicaciones = '' )
            OR (expediente_otro_organo = 'Si' AND (medio_utilizado IS NULL OR medio_utilizado = '' OR institucion IS NULL OR institucion = '' OR tipo_informacion IS NULL OR tipo_informacion = ''))
            OR (tipo_informacion = 'Documento (certidicado) y/o expediente' AND (identifique_documento IS NULL OR identifique_documento = ''))
            OR (tipo_informacion = 'Dato o set de datos' AND (identifique_dato IS NULL OR identifique_dato = ''))
            OR (doc_notarial = 'Si' AND(name_doc IS NULL OR name_doc = '' ))
            THEN TRUE 
            ELSE FALSE 
            END AS dato_vacio")
            )->where('id_procedimiento', $id)
            ->first();

        $identificacion_verifi = DB::table('identificacions')
            ->select(
                DB::raw("CASE 
            WHEN (SELECT Tipo_procedimiento FROM procedimientos WHERE id = $id) = 'Otras tramitaciones' THEN nombre IS NULL OR nombre = '' OR descripcion IS NULL OR descripcion = '' OR area_responsable IS NULL OR area_responsable = '' OR cargo_responsable IS NULL OR cargo_responsable = '' OR producto_institucional IS NULL OR producto_institucional = '' 
            ELSE nombre IS NULL OR nombre = '' OR descripcion IS NULL OR descripcion = '' OR area_responsable IS NULL OR area_responsable = '' OR cargo_responsable IS NULL OR cargo_responsable = '' OR tipo_inicio IS NULL OR tipo_inicio = '' OR acto_inicio IS NULL OR acto_inicio = '' OR acto_termino IS NULL OR acto_termino = '' OR producto_institucional IS NULL OR producto_institucional = '' 
        END AS identificacion_vacio")
            )->where('id_procedimiento', $id)
            ->first();

        $procedimiento = procedimiento::find($id);
        $es_vacio = $resultados ? $resultados->es_vacio : null;
        $marco_vacio = $marco_verifi ? $marco_verifi->marco_vacio : null;
        $usuario_vacio = $usuario_verifi ? $usuario_verifi->usuario_vacio : null;
        $digital_vacio = $digital_verifi ? $digital_verifi->digital_vacio : null;
        $nivel_0 = $nivel ? $nivel->nivel_0 : null;
        $noti_vacio = $noti_verifi ? $noti_verifi->noti_vacio : null;
        $dato_vacio = $dato_verifi ? $dato_verifi->dato_vacio : null;
        $identificacion_vacio = $identificacion_verifi ? $identificacion_verifi->identificacion_vacio : null;
        $userName = Auth::user()->name;
        $digital = Digital::select('*')
            ->where('id_procedimiento', $id)
            ->first();
        if (!$procedimiento) {
            abort(404); // Otra acción en caso de que no se encuentre la identificación
        }
        $autenticacion = $digital && $digital->autenticacion ? explode(',', $digital->autenticacion) : [];
        return view('formulario.digital', compact('userName'), [
            'digital' => $digital,
            'procedimiento' => $procedimiento,
            'autenticacion' => $autenticacion,
            'es_vacio' => $es_vacio,
            'nivel_0' => $nivel_0,
            'marco_vacio' => $marco_vacio,
            'usuario_vacio' => $usuario_vacio,
            'digital_vacio' => $digital_vacio,
            'noti_vacio' => $noti_vacio,
            'dato_vacio' => $dato_vacio,
            'identificacion_vacio' => $identificacion_vacio



        ]);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $autenticacion = implode(',', $request->input('autenticacion', []));
        $criteria = [
            'id_procedimiento' => $request->input('id_procedimiento')
        ];

        // Define los valores que se deben actualizar o crear
        $values = [
            'firma_electronica' => $request->input('firma_electronica'),
            'mecanismos' => $request->input('mecanismos'),

            'autenticacion' => $autenticacion,


        ];

        // Usa el método updateOrCreate para insertar o actualizar el registro
        Digital::updateOrCreate($criteria, $values);

        // Redirecciona con un mensaje de éxito
        return redirect()->back()->with('guardado', 'guardado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Digital $digital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Digital $digital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Digital $digital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Digital $digital)
    {
        //
    }
}
