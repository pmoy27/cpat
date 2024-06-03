@include('menu.menu')
<div class="p-4 lg:ml-64  h-full ">
    <div class="flex gap-5 mt-5 max-w-8xl mx-auto sm:px-6 lg:px-8">
        @include('menu.minmenu')
        <div class="p-3 shadow-lg w-full border mb-10 border-gray-200 rounded-lg">
            <h5 class="text-lg font-semibold p-3">Usuarios</h5>
            <form class="mt-5 p-3 flex flex-col gap-5" action="{{route('formulario.usuario')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_procedimiento" value="{{$procedimiento->id}}">
                <div class="flex flex-col">
                    <label class="font-semibold">11. Pago asociado</label>
                    <span class="text-sm text-gray-400">Costo o tarifa que debe ser pagado por la o el usuario.</span>
                    <div class="flex mt-4 justify-between gap-11 mb-3">
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="Si" {{ ($usuario->pago_asociado ?? '') == "Si" ? 'Checked' : '' }} name="pago_asociado" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields('Si')">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 ">Si</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="No" {{ ($usuario->pago_asociado ?? '') == "No" ? 'Checked' : '' }} name="pago_asociado" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields('No')">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 ">No</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-3" type="radio" value="En algunos casos" {{ ($usuario->pago_asociado ?? '') == "En algunos casos" ? 'Checked' : '' }} name="pago_asociado" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields('En algunos casos')">
                            <label for="default-radio-3" class="ms-2 text-sm font-medium text-gray-900 ">En algunos casos</label>
                        </div>
                    </div>

                    <div id="additional-fields" style="display: none; padding:10px;">
                        <div class="flex flex-col">
                            <label class="font-semibold">Tipo de moneda</label>
                            <select id="producto" name="tipo_moneda" class="bg-white border border-gray-300 mt-3 mb-3 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected disabled>Seleccióne una opción</option>
                                <option name="tipo_moneda" value="Peso chileno" {{ ($usuario->tipo_moneda ?? '') == "Peso chileno" ? 'selected' : '' }}>Peso chileno</option>
                                <option name="tipo_moneda" value="Unidad de fomento" {{ ($usuario->tipo_moneda ?? '') == "Unidad de fomento" ? 'selected' : '' }}>Unidad de fomento</option>
                                <option name="tipo_moneda" value="Unidad tributaria mensual" {{ ($usuario->tipo_moneda ?? '') == "Unidad tributaria mensual" ? 'selected' : '' }}>Unidad tributaria mensual</option>

                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Monto a pagar</label>
                            <input type="text" name="monto_pagar" value="{{ old('monto_pagar', isset($usuario) ? $usuario->monto_pagar  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                        </div>
                    </div>
                    <div class="flex flex-col">

                        <label class="font-semibold">12. Tipo de usuario(a)</label>
                        <div class="flex mt-4 mb-3 gap-5 justify-between">
                            <label for="bordered-radio-1">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-1" name="tipo_usuario" type="radio" value="Persona natural" {{ ($usuario->tipo_usuario ?? '') == "Persona natural" ? 'checked' : '' }} name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <p class="text-xs font-normal text-gray-500">Persona natural: todo individuo de la humana, cualquier sea su sexo, edad, raza o codicion social</p>
                                </div>
                            </label>
                            <label for="bordered-radio-2">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-2" type="radio" name="tipo_usuario" value="Persona juridica" {{ ($usuario->tipo_usuario ?? '') == "Persona juridica" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <p id="bordered-radio-2" class="text-xs font-normal text-gray-500 ">Persona juridaca: Entre ficticio que tiene la capacidad legal de adquirir derechos, contraer obligaciones y ser representado judicial y extrajudicial.</p>
                                </div>
                            </label>
                            <label for="bordered-radio-3">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-3" type="radio" value="Ambos tipos de personas" {{ ($usuario->tipo_usuario ?? '') == "Ambos tipos de personas" ? 'checked' : '' }} name="tipo_usuario" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <p id="bordered-radio-3" class="text-xs font-normal text-gray-500 ">Ambos tipos de personas: Persona natural y juridica.</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold">13. Segmento de usuarios(as)</label>
                        <select id="producto" name="segmento_usuario" class="bg-white border border-gray-300 mt-3 mb-3 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Seleccióne una opción</option>
                            <option name="segmento_usuario" value="Género" {{ ($usuario->segmento_usuario ?? '') == "Género" ? 'selected' : '' }}>Género</option>
                            <option name="segmento_usuario" value="Productividad y emprendimiento" {{ ($usuario->segmento_usuario ?? '') == "Productividad y emprendimiento" ? 'selected' : '' }}>Productividad y emprendimiento</option>
                            <option name="segmento_usuario" value="Calidad indígena" {{ ($usuario->segmento_usuario ?? '') == "Calidad indígena" ? 'selected' : '' }}>Calidad indígena</option>
                            <option name="segmento_usuario" value="Discapacidad" {{ ($usuario->segmento_usuario ?? '') == "Discapacidad" ? 'selected' : '' }}>Discapacidad</option>
                            <option name="segmento_usuario" value="Medio Ambiente" {{ ($usuario->segmento_usuario ?? '') == "Medio Ambiente" ? 'selected' : '' }}>Medio Ambiente</option>
                            <option name="segmento_usuario" value="Migración" {{ ($usuario->segmento_usuario ?? '') == "Migración" ? 'selected' : '' }}>Migración</option>
                            <option name="segmento_usuario" value="Personas mayores" {{ ($usuario->segmento_usuario ?? '') == "Personas mayores" ? 'selected' : '' }}>Personas mayores</option>
                            <option name="segmento_usuario" value="Infancia" {{ ($usuario->segmento_usuario ?? '') == "Infancia" ? 'selected' : '' }}>Infancia</option>
                            <option name="segmento_usuario" value="No aplica" {{ ($usuario->segmento_usuario ?? '') == "No aplica" ? 'selected' : '' }}>No aplica</option>

                        </select>
                    </div>
                    <div class="flex flex-col">

                        <label class="font-semibold">14. Relación con el Registro Social de Hogares (RSH) y/o con el Registro de Información Social (RIS) para la selección de sus usuarios</label>
                        <div class="flex mt-4 mb-3 gap-5 justify-between">
                            <label for="bordered-radio-4">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-4" name="registro_social" type="radio" value="Si, se interopera con el Ministerio de Desarrollo Social y Familia" {{ ($usuario->registro_social ?? '') == "Si, se interopera con el Ministerio de Desarrollo Social y Familia" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <p id="bordered-radio-4" class="text-xs font-normal text-gray-500">Si, se interopera con el Ministerio de Desarrollo Social y Familia</p>
                                </div>
                            </label>
                            <label for="bordered-radio-5">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-5" type="radio" name="registro_social" value="Si, se solicita a los(as)" {{ ($usuario->registro_social ?? '') == "Si, se solicita a los(as)" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <p id="bordered-radio-5" class="text-xs font-normal text-gray-500 ">Si, se solicita a los(as)</p>
                                </div>
                            </label>
                            <label for="bordered-radio-6">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-6" type="radio" value="No se requiere informacion" {{ ($usuario->registro_social ?? '') == "No se requiere informacion" ? 'checked' : '' }} name="registro_social" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <p id="bordered-radio-6" class="text-xs font-normal text-gray-500 ">No se requiere informacion</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col">

                        <label class="font-semibold">15. Disponibilidad para su realización</label>
                        <span class="text-sm text-gray-400">Indique si se este registro se encuentra disponible permanentemente para su realización o si sólo puede ser realizado durante períodos de tiempo determinados.</span>
                        <div class="flex mt-4 mb-3 gap-5 ">
                            <label for="bordered-radio-7">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-7" name="disponibilidad" type="radio" value="Se puede realizar durante todo el año" {{ ($usuario->disponibilidad ?? '') == "Se puede realizar durante todo el año" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <p id="bordered-radio-7" class="text-xs font-normal text-gray-500">Se puede realizar durante todo el año</p>
                                </div>
                            </label>
                            <label for="bordered-radio-8">
                                <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                    <input id="bordered-radio-8" type="radio" name="disponibilidad" value="Se puede realizar sólo en algunos períodos del año" {{ ($usuario->disponibilidad ?? '') == "Se puede realizar sólo en algunos períodos del año" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                    <p id="bordered-radio-8" class="text-xs font-normal text-gray-500 ">Se puede realizar sólo en algunos períodos del año</p>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="flex gap-4">

                        <button class="flex items-center gap-2 text-sm p-3 border bg-blue-900 text-white" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 4l0 4l-6 0l0 -4" />
                            </svg>Guardar</button>
                        <a href="/soporte/{{$procedimiento->id}}" class="flex items-center text-md gap-1 p-3 underline  text-blue-900" name="action" value="guardar">Siguiente <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
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

<script>
    function toggleFields(value) {
        const additionalFields = document.getElementById('additional-fields');
        if (value === 'Si' || value === 'En algunos casos') {
            additionalFields.style.display = 'block';
        } else {
            additionalFields.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el valor del radio button seleccionado al cargar la página
        const selectedValue = document.querySelector('input[name="pago_asociado"]:checked');
        if (selectedValue) {
            toggleFields(selectedValue.value);
        }
    });
</script>