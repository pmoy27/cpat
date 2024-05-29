@include('menu.menu')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<div class="p-4 lg:ml-64  h-full ">
    <div class="flex gap-5 mt-5 max-w-8xl mx-auto sm:px-6 lg:px-8">
        @include('menu.minmenu')
        <div class="p-3 shadow-lg w-full border mb-10 border-gray-200 rounded-lg">
            <h5 class="text-lg font-semibold p-3">Datos y documentos</h5>
            <form id="finishForm{{ $procedimiento->id }}" class="mt-5 p-3 flex flex-col gap-5" action="{{route('formulario.datos')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$procedimiento->id}}" name="id_procedimiento">
                <div class="flex flex-col">
                    <label class="font-semibold">31. Dato, documentos(certificados) y/o expedientes en poder de otros órganos de la Administración del Estado</label>
                    <span class="text-sm text-gray-400">Indique si para efectuar este procedimiento administrativo o tramitación requiere informacion que este en poder de otros órganos de la administración del Estado.</span>
                    <div class="flex mt-4 gap-11">
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="Si" name="expediente_otro_organo" {{ ($dato->expediente_otro_organo ?? '') == "Si" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields('Si')">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 ">Si</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="No" name="expediente_otro_organo" {{ ($dato->expediente_otro_organo ?? '') == "No" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields('No')">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 ">No</label>
                        </div>
                    </div>
                </div>
                <div id="additional-fields" class="p-4" style="display: none;">
                    <div class="flex flex-col">
                        <label class="font-semibold">Medio utilizado para obtener el dato, documento (certificado) y/o expediente.</label>
                        <span class="text-sm text-gray-400">Esta pregunta debe ser contestada para cada dato, documento y/o expediente que se requiera de otros órganos de la administración del Estado, si hay más de uno debe presionar la opción "agregar otro dato, documento y/o expediente" y responder todas las preguntas de caracterización que se mostrarán.</span>
                        <select id="producto" name="medio_utilizado" class="bg-white border border-gray-300 mt-3 mb-3 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Seleccióne una opción</option>
                            <option name="medio_utilizado" value="No hay interoperabilidad, se solicita a sus usuarios(as)" {{ ($dato->medio_utilizado ?? '') == "No utiliza" ? 'selected' : '' }}>No hay interoperabilidad, se solicita a sus usuarios(as)</option>
                            <option name="medio_utilizado" value="No hay interoperabilidad, se intercambia manualmente con al institución" {{ ($dato->medio_utilizado ?? '') == "Utiliza firma electrónica avanzada del Estado (Firma Gob)" ? 'selected' : '' }}>No hay interoperabilidad, se intercambia manualmente con al institución</option>
                            <option name="medio_utilizado" value="Hay interoperabilidad electrónica con la institución" {{ ($dato->medio_utilizado ?? '') == "Utiliza firma electrónica avanzada provista por un externo" ? 'selected' : '' }}>Hay interoperabilidad electrónica con la institución</option>

                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold">Indique la institución que provee el dato, documento (certificado) y/o expediente que se intercambia manualmente</label>

                        <input type="text" name="institucion" value="{{ old('institucion', isset($dato) ? $dato->institucion  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="flex mt-3 flex-col">

                        <label class="font-semibold">Tipo de información que se intercambia manualmente</label>
                        <span class="text-sm text-gray-400">Indique si este registro intercambia manualmente datos/set de datos o documentos (certificado).</span>
                        <div class="flex mt-4 mb-3 gap-5 ">
                            <label for="bordered-radio-7">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[70px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-7" name="tipo_informacion" type="radio" value="Documento (certidicado) y/o expediente" {{ ($dato->tipo_informacion ?? '') == "Documento (certidicado) y/o expediente" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " onclick="toggleField('Documento (certidicado) y/o expediente')">
                                    <p id="bordered-radio-7" class="text-xs font-normal text-gray-500">Documento (certidicado) y/o expediente</p>
                                </div>
                            </label>
                            <label for="bordered-radio-8">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[70px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-8" type="radio" name="tipo_informacion" value="Dato o set de datos" {{ ($dato->tipo_informacion ?? '') == "Dato o set de datos" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " onclick="toggleField('Dato o set de datos')">
                                    <p id="bordered-radio-8" class="text-xs font-normal text-gray-500 ">Dato o set de datos</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div id="datos" class="flex flex-col" style="display: none;">
                        <label class="font-semibold">Indique el nombre del dato que intercambia manualmente (separados por coma)</label>

                        <input type="text" name="identifique_dato" value="{{ old('identifique_dato', isset($dato) ? $dato->identifique_dato  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div id="documento" class="flex mt-3 flex-col" style="display: none;">
                        <label class="font-semibold">Indique el documento (certificado) que se intercambia manualmente</label>
                        <input type="text" name="identifique_documento" value="{{ old('identifique_documento', isset($dato) ? $dato->identifique_documento  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>

                </div>
                <div class="flex mt-3 flex-col">

                    <label class="font-semibold">32. Medio utilizado para enviar comunicaciones oficiales entre órganos de la Administración del Estado.</label>
                    <span class="text-sm text-gray-400">Si este registro considera el envío y recepción de comunicaciones oficiales, indique a través de qué medio éstas se efectúan.</span>
                    <div class="grid grid-cols-2 2xl:grid-cols-3 mt-4 mb-3 gap-5 ">
                        <label for="bordered-radio-9">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[70px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-9" name="enviar_comunicaciones" type="radio" value="Si, realiza envios por medio de la plataforma Doc Digital y/o se encuentra integrado a ella" {{ ($dato->enviar_comunicaciones ?? '') == "Si, realiza envios por medio de la plataforma Doc Digital y/o se encuentra integrado a ella" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p id="bordered-radio-9" class="text-xs font-normal text-gray-500">Si, realiza envios por medio de la plataforma Doc Digital y/o se encuentra integrado a ella</p>
                            </div>
                        </label>
                        <label for="bordered-radio-10">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[70px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-10" type="radio" name="enviar_comunicaciones" value="Si, realiza envios por medios electronicos propios" {{ ($dato->enviar_comunicaciones ?? '') == "Si, realiza envios por medios electronicos propios" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p id="bordered-radio-10" class="text-xs font-normal text-gray-500 ">Si, realiza envios por medios electronicos propios</p>
                            </div>
                        </label>
                        <label for="bordered-radio-11">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[70px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-11" type="radio" name="enviar_comunicaciones" value="Si, realiza envios por medios electronicos propios y DOC Digital" {{ ($dato->enviar_comunicaciones ?? '') == "Si, realiza envios por medios electronicos propios y DOC Digital" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p id="bordered-radio-11" class="text-xs font-normal text-gray-500 ">Si, realiza envios por medios electronicos propios y DOC Digital</p>
                            </div>
                        </label>
                        <label for="bordered-radio-12">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[70px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-12" type="radio" name="enviar_comunicaciones" value="Si, realiza envios por medios fisicos" {{ ($dato->enviar_comunicaciones ?? '') == "Si, realiza envios por medios fisicos" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p id="bordered-radio-12" class="text-xs font-normal text-gray-500 ">Si, realiza envios por medios fisicos</p>
                            </div>
                        </label>
                        <label for="bordered-radio-13">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[70px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-13" type="radio" name="enviar_comunicaciones" value="No considera comunicaciones oficiales" {{ ($dato->enviar_comunicaciones ?? '') == "No considera comunicaciones oficiales" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p id="bordered-radio-13" class="text-xs font-normal text-gray-500 ">No considera comunicaciones oficiales</p>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <button class="flex items-center gap-2 text-md underline"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M5 12l6 6" />
                            <path d="M5 12l6 -6" />
                        </svg>Atras</button>
                    <div class="flex gap-4">
                        <button class="flex items-center text-md gap-1 p-3 underline  text-blue-900" name="action" value="guardar" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 4l0 4l-6 0l0 -4" />
                            </svg>Guardar</button>
                        <a data-modal-target="confirmar" data-modal-toggle="confirmar" class="flex items-center text-sm gap-2 p-3 border cursor-pointer bg-blue-900 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-send">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 14l11 -11" />
                                <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
                            </svg>
                            Finalizar y enviar
                        </a>



                    </div>

                </div>
                @include('formulario.confirmar')
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

<script>
    function toggleFields(value) {
        const additionalFields = document.getElementById('additional-fields');
        if (value === 'Si') {
            additionalFields.style.display = 'block';
        } else {
            additionalFields.style.display = 'none';
        }
    }

    function toggleField(value) {
        const additionalFields = document.getElementById('datos');
        const additionalFields2 = document.getElementById('documento');
        if (value === 'Documento (certidicado) y/o expediente') {
            additionalFields2.style.display = 'block';
            additionalFields.style.display = 'none';
        } else if (value === 'Dato o set de datos') {
            additionalFields2.style.display = 'none';
            additionalFields.style.display = 'block';
        }
    }


    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el valor del radio button seleccionado al cargar la página
        const selectedValue = document.querySelector('input[name="expediente_otro_organo"]:checked');
        if (selectedValue) {
            toggleFields(selectedValue.value);
        }
        const selectedValue2 = document.querySelector('input[name="tipo_informacion"]:checked');
        if (selectedValue) {
            toggleFields(selectedValue2.value);
        }
    });
</script>