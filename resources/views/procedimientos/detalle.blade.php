<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            width: 100%;
            margin: 0 auto;
        }

        .row {
            display: table;
            width: 100%;
        }

        .cell {
            display: table-cell;
            padding: 10px;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
        }

        .description {
            font-size: 16px;
        }

        .titulo {
            text-align: center;
        }

        .nombre {
            font-weight: bold;

        }

        .texto {
            text-align: left;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>


<body>
    <h1 class="titulo">{{$procedimiento->nombre}}</h1>
    <h3 class="subtitulo">Identificación</h3>
    <div class="container">
        <div class="row">
            <div class="cell"><span class="nombre">Tipo de procedimiento:</span>{{ old('Tipo_procedimiento', isset($procedimiento) ? $procedimiento->Tipo_procedimiento  : '') }} </div>
        </div>
        <div class="row">
            <div class="cell"><span class="nombre">Descripción:</span>{{ old('descripcion', isset($identificacion) ? $identificacion->descripcion  : '') }} </div>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Area responsable:</span>{{ old('area_responsable', isset($identificacion) ? $identificacion->area_responsable  : '') }}</p>
        </div>

        <div class="row">
            <p class="cell"><span class="nombre">Cargo responsable:</span> {{ old('cargo_responsable', isset($identificacion) ? $identificacion->cargo_responsable  : '') }} </p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Tipo de inicio:</span>{{ old('tipo_inicio', isset($identificacion) ? $identificacion->tipo_inicio  : '') }}</p>
        </div>

        <div class="row">
            <p class="cell"><span class="nombre">Acto de inicio:</span>{{ old('acto_inicio', isset($identificacion) ? $identificacion->acto_inicio  : '') }} </p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Acto termino:</span>{{ old('acto_termino', isset($identificacion) ? $identificacion->acto_termino  : '') }}</p>
        </div>


        <div class="row">
            <p class="cell"><span class="nombre">Producto institucional:</span>{{ old('producto_institucional', isset($identificacion) ? $identificacion->producto_institucional  : '') }}</p>
        </div>

    </div>

    <h3 class="subtitulo">Marco normativo</h3>
    <div class="container">
        <div class="row">
            <p class="cell"><span class="nombre">Numero de ley:</span> {{ old('n_ley', isset($marco) ? $marco->n_ley  : '') }}</p>

        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Url ley:</span> {{ old('url_ley', isset($marco) ? $marco->url_ley  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Otras fuentes normativas:</span> {{ old('fuentes_normativas', isset($marco) ? $marco->fuentes_normativas  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Tipo de fuente normativa:</span> {{ old('tipo_fuente', isset($marco) ? $marco->tipo_fuente  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Nombre fuente normativa:</span> {{ old('nombre_fuente', isset($marco) ? $marco->nombre_fuente  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">URL de la otra fuente normativa:</span> {{ old('url_fuente', isset($marco) ? $marco->url_fuente  : '') }}</p>
        </div>
    </div>
    <div class="page-break"></div>
    <h3 class="subtitulo">Usuarios</h3>
    <div class="container">
        <div class="row">
            <p class="cell"><span class="nombre">Pago asociado:</span> {{ old('pago_asociado', isset($usuario) ? $usuario->pago_asociado  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Tipo de moneda:</span> {{ old('tipo_moneda', isset($usuario) ? $usuario->tipo_moneda  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Monto a pagar:</span> {{ old('monto_pagar', isset($usuario) ? $usuario->monto_pagar  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Tipo de usuario(a):</span> {{ old('tipo_usuario', isset($usuario) ? $usuario->tipo_usuario  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Segmento de usuarios(as):</span> {{ old('segmento_usuario', isset($usuario) ? $usuario->segmento_usuario  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Relación con el Registro Social de Hogares (RSH):</span> {{ old('registro_social', isset($usuario) ? $usuario->registro_social  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Disponibilidad para su realización:</span> {{ old('disponibilidad', isset($usuario) ? $usuario->disponibilidad  : '') }}</p>
        </div>

    </div>
    <h3 class="subtitulo">Soporte electronico</h3>
    <div class="container">
        <div class="row">
            <p class="cell"><span class="nombre">Nivel de digitalización:</span> {{ old('nivel_digitalizacion', isset($soporte) ? $soporte->nivel_digitalizacion  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Fecha de Digitalización:</span> {{ old('fecha_digitalizacion', isset($soporte) ? $soporte->fecha_digitalizacion  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Canal(es) disponible(s) de atención:</span> {{ old('canales_atencion', isset($soporte) ? $soporte->canales_atencion  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Canal(es) transaccional(es):</span> {{ old('canales_transaccionales', isset($soporte) ? $soporte->canales_transaccionales  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Tipo de expediente:</span> {{ old('tipo_expediente', isset($soporte) ? $soporte->tipo_expediente  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Acceso al expediente electronico por parte de los interesados:</span> {{ old('acceso_expediente', isset($soporte) ? $soporte->acceso_expediente  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">URL del inicio:</span> {{ old('url_inicio', isset($soporte) ? $soporte->url_inicio  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Ficha ChileAtiende relacionada:</span> {{ old('chile_atiende', isset($soporte) ? $soporte->chile_atiende  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">URL de ChileAtiende:</span> {{ old('url_ficha', isset($soporte) ? $soporte->url_ficha  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Número de plataformas electrónicas que intervienen en el soporte electrónico:</span> {{ old('n_plataformas', isset($soporte) ? $soporte->n_plataformas  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Alcance de las plataformas electrónicas que soportan el registro:</span> {{ old('alcance_plataformas', isset($soporte) ? $soporte->alcance_plataformas  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Plataforma o sistema utilizado para la digitalización:</span> {{ old('plataforma_utilizado', isset($soporte) ? $soporte->plataforma_utilizado  : '') }}</p>
        </div>
    </div>
    <div class="page-break"></div>
    <h3 class="subtitulo">Identidad digital</h3>
    <div class="container">
        <div class="row">
            <p class="cell"><span class="nombre">Plataforma o sistema utilizado para la digitalización:</span> {{ old('autenticacion', isset($digital) ? $digital->autenticacion  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Firma electrónica Avanzada:</span> {{ old('firma_electronica', isset($digital) ? $digital->firma_electronica  : '') }}</p>
        </div>

    </div>
    <h3 class="subtitulo">Notificaciones</h3>
    <div class="container">
        <div class="row">
            <p class="cell"><span class="nombre">Notificaciones practicadas:</span> {{ old('noti_practicadas', isset($notificacion) ? $notificacion->noti_practicadas  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Etapa en la que se practica(n) la(s) notificación(es):</span> {{ old('etapas_notificaciones', isset($notificacion) ? $notificacion->etapas_notificaciones  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Medio utilizado para notificar en la etapa de finalización:</span> {{ old('medio_notificacion', isset($notificacion) ? $notificacion->medio_notificacion  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Medio utilizado para enviar comunicaciones:</span> {{ old('medio_envio_comuni', isset($notificacion) ? $notificacion->medio_envio_comuni  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Medio utilizado para enviar comunicaciones personales o de seguimiento:</span> {{ old('medio_envio_personales', isset($notificacion) ? $notificacion->medio_envio_personales  : '') }}</p>
        </div>
    </div>
    <h3 class="subtitulo">Datos y documentos</h3>
    <div class="container">
        <div class="row">
            <p class="cell"><span class="nombre">Dato, documentos(certificados) y/o expedientes en poder de otros órganos de la Administración del Estado:</span> {{ old('expediente_otro_organo', isset($dato) ? $dato->expediente_otro_organo  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Medio utilizado para obtener el dato, documento (certificado) y/o expediente:</span> {{ old('medio_utilizado', isset($dato) ? $dato->medio_utilizado  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Indique la institución que provee el dato, documento (certificado) y/o expediente que se intercambia manualmente:</span> {{ old('institucion', isset($dato) ? $dato->institucion  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Tipo de información que se intercambia manualmente:</span> {{ old('tipo_informacion', isset($dato) ? $dato->tipo_informacion  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Indique el nombre del dato que intercambia manualmente:</span> {{ old('identifique_dato', isset($dato) ? $dato->identifique_dato  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Indique el documento (certificado) que se intercambia manualmente:</span> {{ old('identifique_documento', isset($dato) ? $dato->identifique_documento  : '') }}</p>
        </div>
        <div class="row">
            <p class="cell"><span class="nombre">Medio utilizado para enviar comunicaciones oficiales entre órganos de la Administración del Estado:</span> {{ old('enviar_comunicaciones', isset($dato) ? $dato->enviar_comunicaciones  : '') }}</p>
        </div>

    </div>
</body>

</html>