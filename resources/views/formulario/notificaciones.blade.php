@include('menu.menu')
<div class="p-4 lg:ml-64  h-full ">
    <div class="flex gap-5 mt-5 max-w-8xl mx-auto sm:px-6 lg:px-8">
        @include('menu.minmenu')
        <div class="p-3 shadow-lg w-full border mb-10 border-gray-200 rounded-lg">
            <h5 class="text-lg font-semibold p-3">Notificaciones</h5>
            <form class="mt-5 p-3 flex flex-col gap-5" action="{{route('formulario.notificacion')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$procedimiento->id}}" name="id_procedimiento">
                <div class="flex flex-col">
                    <label class="font-semibold">28. Notificaciones practicadas</label>
                    <span class="text-sm text-gray-400">Indique si este registro requiere enviar notificaciones durante la tramitación, independiente si ellas se efectúan en papel o electrónicamente.</span>
                    <div class="flex mt-4 gap-11">
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="Si" name="noti_practicadas" {{ ($notificacion->noti_practicadas ?? '') == "Si" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields('Si')">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 ">Si</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="No" name="noti_practicadas" {{ ($notificacion->noti_practicadas ?? '') == "No" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields('No')">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 ">No</label>
                        </div>
                    </div>
                </div>
                <div id="additional-fields" class="p-3" style="display: none;">
                    <div class="flex flex-col mt-3">
                        <label class="font-semibold">Etapa en la que se practica(n) la(s) notificación(es)</label>
                        <span class="text-sm text-gray-400">Indique todas las etapas en la que este registro efectúa notificaciones.</span>
                        <div class="flex items-center mb-4 mt-3">
                            <input id="checked-checkbox-5" type="checkbox" name="etapas_notificaciones[]" value="Etapa de inicio" {{ in_array('Etapa de inicio', $etapas_notificaciones) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox-5" class="ms-2 text-sm font-medium text-gray-900 ">Etapa de inicio</label>
                        </div>
                        <div class="flex items-center mb-4 ">
                            <input id="checked-checkbox-6" type="checkbox" name="etapas_notificaciones[]" value="Etapa de instrucción" {{ in_array('Etapa de instrucción', $etapas_notificaciones) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox-6" class="ms-2 text-sm font-medium text-gray-900 ">Etapa de instrucción</label>
                        </div>
                        <div class="flex items-center mb-4 ">
                            <input id="checked-checkbox-7" type="checkbox" name="etapas_notificaciones[]" value="Etapa de finalización" {{ in_array('Etapa de finalización', $etapas_notificaciones) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                            <label for="checked-checkbox-7" class="ms-2 text-sm font-medium text-gray-900 ">Etapa de finalización</label>
                        </div>
                    </div>
                    <div class="flex flex-col">

                        <label class="font-semibold">Medio utilizado para notificar en la etapa de finalización</label>
                        <span class="text-sm text-gray-400">Indique cómo se envían las notificaciones durante la etapa de finalización, que comprende la conclusión del procedimiento por medio de la emisión de la resolución final, por desistimiento, declaración de abandono o la renuncia al derecho en que se funda la solicitud.</span>
                        <div class="grid grid-cols-3 mt-4 justify-between gap-3 mb-3">
                            <div class="flex items-center">
                                <input id="default-radio-12" type="radio" name="medio_notificacion" value="Sólo por medios físicos" {{ ($notificacion->medio_notificacion ?? '') == "Sólo por medio físico" ? 'Checked' : '' }} name="medio_notificacion" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="default-radio-12" class="ms-2 text-sm font-medium text-gray-900 ">Sólo por medios físicos</label>
                            </div>
                            <div id="tipo-nivel0" class="flex items-center">
                                <input id="default-radio-22" type="radio" name="medio_notificacion" value="Sólo por medios electrónicos" {{ ($notificacion->medio_notificacion ?? '') == "Sólo por medios electrónicos" ? 'Checked' : '' }} name="medio_notificacion" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="default-radio-22" class="ms-2 text-sm font-medium text-gray-900 ">Sólo por medios electrónicos</label>
                            </div>
                            <div id="tipo-nivel0-2" class="flex items-center">
                                <input id="default-radio-33" type="radio" name="medio_notificacion" value="Ambos medios" {{ ($notificacion->medio_notificacion ?? '') == "Ambos medios" ? 'Checked' : '' }} name="medio_notificacion" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="default-radio-33" class="ms-2 text-sm font-medium text-gray-900 ">Ambos medios</label>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="flex flex-col">

                    <label class="font-semibold">29. Medio utilizado para enviar comunicaciones</label>
                    <span class="text-sm text-gray-400">Indique cómo se envían las comunicaciones institucionales, entendidas como información que se envía a los(as) usuario(as) sobre aspectos generales, por ejemplo información sobre beneficios, programas o fechas de convocatoria.</span>
                    <div class="grid grid-cols-3 mt-4 justify-between gap-3 mb-3">
                        <div class="flex items-center">
                            <input id="default-radio-11" type="radio" name="medio_envio_comuni" value="Solo por medio físico" {{ ($notificacion->medio_envio_comuni ?? '') == "Solo por medio físico" ? 'Checked' : '' }} name="medio_envio_comuni" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-11" class="ms-2 text-sm font-medium text-gray-900 ">Solo por medio físico</label>
                        </div>
                        <div id="tipo-nivel0" class="flex items-center">
                            <input id="default-radio-23" type="radio" name="medio_envio_comuni" value="Sólo por medios electrónicos" {{ ($notificacion->medio_envio_comuni ?? '') == "Sólo por medios electrónicos" ? 'Checked' : '' }} name="medio_envio_comuni" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-23" class="ms-2 text-sm font-medium text-gray-900 ">Sólo por medios electrónicos</label>
                        </div>
                        <div id="tipo-nivel0-2" class="flex items-center">
                            <input id="default-radio-34" type="radio" name="medio_envio_comuni" value="Ambos medios, fisicos y electrónicos" {{ ($notificacion->medio_envio_comuni ?? '') == "Ambos medios, fisicos y electrónicos" ? 'Checked' : '' }} name="medio_envio_comuni" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-34" class="ms-2 text-sm font-medium text-gray-900 ">Ambos medios, fisicos y electrónicos</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-45" type="radio" name="medio_envio_comuni" value="No realiza este tipo de comunicación" {{ ($notificacion->medio_envio_comuni ?? '') == "No realiza este tipo de comunicación" ? 'Checked' : '' }} name="medio_envio_comuni" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-45" class="ms-2 text-sm font-medium text-gray-900 ">No realiza este tipo de comunicación</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">

                    <label class="font-semibold">30. Medio utilizado para enviar comunicaciones personales o de seguimiento</label>
                    <span class="text-sm text-gray-400">Indique cómo se envían las comunicaciones personales o de seguimiento, entendidas como información específica que se envía a determinados usuario(as), por ejemplo sobre el estado de tramitación de una solicitud.</span>
                    <div class="grid grid-cols-3 mt-4 justify-between gap-3 mb-3">
                        <div class="flex items-center">
                            <input id="default-radio-102" type="radio" name="medio_envio_personales" value="Solo por medio físico" {{ ($notificacion->medio_envio_personales ?? '') == "Solo por medio físico" ? 'Checked' : '' }} name="medio_envio_personales" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-102" class="ms-2 text-sm font-medium text-gray-900 ">Solo por medio físico</label>
                        </div>
                        <div id="tipo-nivel0" class="flex items-center">
                            <input id="default-radio-234" type="radio" name="medio_envio_personales" value="Sólo por medios electrónicos" {{ ($notificacion->medio_envio_personales ?? '') == "Sólo por medios electrónicos" ? 'Checked' : '' }} name="medio_envio_personales" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-234" class="ms-2 text-sm font-medium text-gray-900 ">Sólo por medios electrónicos</label>
                        </div>
                        <div id="tipo-nivel0-2" class="flex items-center">
                            <input id="default-radio-333" type="radio" name="medio_envio_personales" value="Ambos medios, fisicos y electrónicos" {{ ($notificacion->medio_envio_personales ?? '') == "Ambos medios, fisicos y electrónicos" ? 'Checked' : '' }} name="medio_envio_personales" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-333" class="ms-2 text-sm font-medium text-gray-900 ">Ambos medios, fisicos y electrónicos</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-433" type="radio" name="medio_envio_personales" value="No realiza este tipo de comunicación" {{ ($notificacion->medio_envio_personales ?? '') == "No realiza este tipo de comunicación" ? 'Checked' : '' }} name="medio_envio_personales" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                            <label for="default-radio-433" class="ms-2 text-sm font-medium text-gray-900 ">No realiza este tipo de comunicación</label>
                        </div>
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

                        <button class="flex items-center gap-2 text-sm p-3 border bg-blue-900 text-white" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 4l0 4l-6 0l0 -4" />
                            </svg>Guardar</button>
                        <a href="/datos/{{$procedimiento->id}}" class="flex items-center text-md gap-1 p-3 underline  text-blue-900" name="action" value="guardar">Siguiente <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
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
        title: "Guardado Correctamente"
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

    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el valor del radio button seleccionado al cargar la página
        const selectedValue = document.querySelector('input[name="noti_practicadas"]:checked');
        if (selectedValue) {
            toggleFields(selectedValue.value);
        }
    });
</script>