@include('menu.menu')
<div class="p-4 lg:ml-64  h-full ">
    <div class="flex gap-5 mt-5 max-w-8xl mx-auto sm:px-6 lg:px-8">
        @include('menu.minmenu')
        <div class="p-3 shadow-lg w-full border mb-10 border-gray-200 rounded-lg">
            <h5 class="text-lg font-semibold p-3">Identificación</h5>
            <form class="mt-5 p-3 flex flex-col gap-5" action="{{route('formulario.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$procedimiento->id}}" name="id_procedimiento">
                <div class="flex flex-col">

                    <label class="font-semibold">1. Nombre</label>
                    <span class="text-sm text-gray-400">Denominación del registro, por ejemplo :"Fondos Concursables sobre Transformación Digital".</span>
                    <input type="text" name="nombre" value="{{ old('nombre', isset($procedimiento) ? $procedimiento->nombre  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " readonly />
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">2. Descripción</label>
                    <span class="text-sm text-gray-400">Breve descripción que describe el objetivo y alcance de este registro.</span>
                    <textarea type="text" name="descripcion" maxlength="250" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />{{ old('descripcion', isset($identificacion) ? $identificacion->descripcion  : '') }}</textarea>
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">3. Área responsable</label>
                    <span class="text-sm text-gray-400">Área o dependencia interna a la cual pertenece el registro. En caso de que el registro interactúe con más de un área seleccione aquella responsable jerárquicamente.</span>
                    <input type="text" name="area_responsable" value="{{ old('area_responsable', isset($identificacion) ? $identificacion->area_responsable  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">4. Cargo del o la responsable</label>
                    <span class="text-sm text-gray-400">Cargo de la o él funcionario responsable de la tramitación del registro. Por ejemplo "Asesor(a) de Políticas y Estudios".</span>
                    <input type="text" name="cargo_responsable" value="{{ old('cargo_responsable', isset($identificacion) ? $identificacion->cargo_responsable  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">5. Tipo de inicio</label>
                    <span class="text-sm text-gray-400">Acto que inicia el procedimiento administrativo de funciones comunes o específica, los que podrán iniciar de oficio o a solicitud de parte interesada.</span>
                    <div class="flex mt-4 gap-5 justify-between">
                        <label for="bordered-radio-1">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px]  border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-1" name="tipo_inicio" type="radio" value="De oficio" {{ ($identificacion->tipo_inicio ?? '') == "De oficio" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p class="text-xs font-normal text-gray-500">De oficio: Por propia iniciativa, como consecuencia de una orden superior, a petición de otros órganos o por denuncia.</p>
                            </div>
                        </label>
                        <label for="bordered-radio-2">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-2" type="radio" name="tipo_inicio" value="Solicitud de Partes" {{ ($identificacion->tipo_inicio ?? '') == "Solicitud de Partes" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p id="bordered-radio-2" class="text-xs font-normal text-gray-500 ">Solicitud de Partes: Solicitados por una parte interesada, cuya solicitud determina en principio y por si misma el origen del procedimiento administrativo.</p>
                            </div>
                        </label>
                        <label for="bordered-radio-3">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-3" type="radio" value="Ambos tipos de inicio" {{ ($identificacion->tipo_inicio ?? '') == "Ambos tipos de inicio" ? 'checked' : '' }} name="tipo_inicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p id="bordered-radio-3" class="text-xs font-normal text-gray-500 ">Ambos tipos de inicio (oficio y a solicitud de partes).</p>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">6. Acto de inicio</label>
                    <span class="text-sm text-gray-400">Indique el acto de inicio de este registro. Por ejemplo solicitud de oficio "Solicitud formal de autoridad para iniciar proceso de investigación sumaria" y solicitud de parte "Solicitud de interesado(a) a postulación Fondo Concursable Transformación Digital".</span>
                    <input type="text" name="acto_inicio" value="{{ old('acto_inicio', isset($identificacion) ? $identificacion->acto_inicio  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">7. Acto de termino</label>
                    <span class="text-sm text-gray-400">Indique el nombre del acto administrativo de término de este registro. Por ejemplo "Resolución que adjudica Fondo Concursable sobre Transformación Digital".</span>
                    <input type="text" name="acto_termino" value="{{ old('acto_termino', isset($identificacion) ? $identificacion->acto_termino  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">8. Producto institucional</label>
                    <span class="text-sm text-gray-400">Los productos son los bienes y/o servicios que pueden ser entregados a las personas en el ejercicio del mandato institucional. Seleccione el producto que mejor se adecúa a este registro.</span>

                    <select id="producto" name="producto_institucional" class="bg-white border border-gray-300 mt-3 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option selected>Seleccióne una opción</option>
                        <option name="producto_institucional" value="Acreditación" {{ ($identificacion->producto_institucional ?? '') == "Acreditación" ? 'selected' : '' }}>Acreditación</option>
                        <option name="producto_institucional" value="Atención y/o información ciudadana" {{ ($identificacion->producto_institucional ?? '') == "Atención y/o información ciudadana" ? 'selected' : '' }}>Atención y/o información ciudadana</option>
                        <option name="producto_institucional" value="Autorización" {{ ($identificacion->producto_institucional ?? '') == "Autorización" ? 'selected' : '' }}>Autorización</option>
                        <option name="producto_institucional" value="Avalúo" {{ ($identificacion->producto_institucional ?? '') == "Avalúo" ? 'selected' : '' }}>Avalúo</option>
                        <option name="producto_institucional" value="Bienes fiscales" {{ ($identificacion->producto_institucional ?? '') == "Bienes fiscales" ? 'selected' : '' }}>Bienes fiscales</option>
                        <option name="producto_institucional" value="Bonos" {{ ($identificacion->producto_institucional ?? '') == "Bonos" ? 'selected' : '' }}>Bonos</option>
                        <option name="producto_institucional" value="Capacitación y asistencia técnica" {{ ($identificacion->producto_institucional ?? '') == "Capacitación y asistencia técnica" ? 'selected' : '' }}>Capacitación y asistencia técnica</option>
                        <option name="producto_institucional" value="Créditos" {{ ($identificacion->producto_institucional ?? '') == "Créditos" ? 'selected' : '' }}>Créditos</option>
                        <option name="producto_institucional" value="Exenciones" {{ ($identificacion->producto_institucional ?? '') == "Exenciones" ? 'selected' : '' }}>Exenciones</option>
                        <option name="producto_institucional" value="Fiscalización" {{ ($identificacion->producto_institucional ?? '') == "Fiscalización" ? 'selected' : '' }}>Fiscalización</option>
                        <option name="producto_institucional" value="Fondos concursables y/o postulables" {{ ($identificacion->producto_institucional ?? '') == "Fondos concursables y/o postulables" ? 'selected' : '' }}>Fondos concursables y/o postulables</option>
                        <option name="producto_institucional" value="Pensiones" {{ ($identificacion->producto_institucional ?? '') == "Pensiones" ? 'selected' : '' }}>Pensiones</option>
                        <option name="producto_institucional" value="Prestaciones" {{ ($identificacion->producto_institucional ?? '') == "Prestaciones" ? 'selected' : '' }}>Prestaciones</option>
                        <option name="producto_institucional" value="Pronunciamiento" {{ ($identificacion->producto_institucional ?? '') == "Pronunciamiento" ? 'selected' : '' }}>Pronunciamiento</option>
                        <option name="producto_institucional" value="Subsidios" {{ ($identificacion->producto_institucional ?? '') == "Subsidios" ? 'selected' : '' }}>Subsidios</option>
                        <option name="producto_institucional" value="Recaudación y pagos" {{ ($identificacion->producto_institucional ?? '') == "Recaudación y pagos" ? 'selected' : '' }}>Recaudación y pagos</option>
                        <option name="producto_institucional" value="Registros" {{ ($identificacion->producto_institucional ?? '') == "Registros" ? 'selected' : '' }}>Registros</option>
                        <option name="producto_institucional" value="Otro" {{ ($identificacion->producto_institucional ?? '') == "Otro" ? 'selected' : '' }}>Otro</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <div class="flex gap-4">

                        <button class="flex items-center gap-2 text-sm p-3 border bg-blue-900 text-white" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 4l0 4l-6 0l0 -4" />
                            </svg>Guardar</button>
                        <a href="/marco-normativo/{{$procedimiento->id}}" class="flex items-center text-md gap-1 p-3 underline  text-blue-900" name="action" value="guardar">Siguiente <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if(session('guardado'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    Toast.fire({
        icon: "success",
        title: "Guardado, Correctamente"
    });
</script>
@endif