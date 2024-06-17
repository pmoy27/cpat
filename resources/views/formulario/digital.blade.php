@include('menu.menu')
<div class="p-4 lg:ml-64  h-full ">
    <div class="flex gap-5 mt-5 max-w-8xl mx-auto sm:px-6 lg:px-8">
        @include('menu.minmenu')
        <div class="p-3 shadow-lg w-full border mb-10 border-gray-200 rounded-lg">
            <h5 class="text-lg font-semibold p-3">Identidad digital</h5>
            <form class="mt-5 p-3 flex flex-col gap-5" action="{{route('formulario.digital')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$procedimiento->id}}" name="id_procedimiento">
                @if ($nivel_0 == 1)
                <div class="flex flex-col mt-3">
                    <label class="font-semibold">26. Plataforma o sistema utilizado para la digitalización</label>
                    <span class="text-sm text-gray-400">Herramienta utilizada para disponer de este registro en soporte electrónico.</span>
                    <div class="flex items-center mb-4 mt-3">
                        <input id="checked-checkbox-9" type="checkbox" name="autenticacion[]" value="No utiliza mecanismo de autenticación digital" {{ in_array('No utiliza mecanismo de autenticación digital', $autenticacion) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-9" class="ms-2 text-sm font-medium text-gray-900 ">No utiliza mecanismo de autenticación digital</label>
                    </div>
                    <div class="flex items-center mb-4 ">
                        <input id="checked-checkbox-10" type="checkbox" name="autenticacion[]" value="Utiliza ClaveÚnica" {{ in_array('Utiliza ClaveÚnica', $autenticacion) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-10" class="ms-2 text-sm font-medium text-gray-900 ">Utiliza ClaveÚnica</label>
                    </div>
                    <div class="flex items-center mb-4 ">
                        <input id="checked-checkbox-11" type="checkbox" name="autenticacion[]" value="Utiliza Clave Tributaria" {{ in_array('Utiliza Clave Tributaria', $autenticacion) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-11" class="ms-2 text-sm font-medium text-gray-900 ">Utiliza Clave Tributaria</label>
                    </div>
                    <div class="flex items-center mb-4 ">
                        <input id="checked-checkbox-12" type="checkbox" name="autenticacion[]" value="Utiliza un mecanismo de autenticación propio" {{ in_array('Utiliza un mecanismo de autenticación propio', $autenticacion) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                        <label for="checked-checkbox-12" class="ms-2 text-sm font-medium text-gray-900 ">Utiliza un mecanismo de autenticación propio</label>
                    </div>
                </div>
                <div class="flex flex-col">

                    <label class="font-semibold">Mecanismo de autenticación digital para funcionarios</label>
                    <span class="text-sm text-gray-400">Método o conjunto de procesos electrónicos que sustentan la autenticación con un nivel de confianza determinado para funcionarios.</span>
                    <div class="flex mt-4 mb-3 gap-5 justify-between">
                        <label for="bordered-radio-1">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-1" name="mecanismos" type="radio" value="No utiliza mecanismo de autenticación digital para funcionarios" {{ ($digital->mecanismos ?? '') == "No utiliza mecanismo de autenticación digital para funcionarios" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p class="text-xs font-normal text-gray-500">No utiliza mecanismo de autenticación digital para funcionarios</p>
                            </div>
                        </label>
                        <label for="bordered-radio-2">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-2" type="radio" name="mecanismos" value="Utiliza un mecanismo propio de autenticación digital para funcionarios" {{ ($digital->mecanismos ?? '') == "Utiliza un mecanismo propio de autenticación digital para funcionarios" ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p id="bordered-radio-2" class="text-xs font-normal text-gray-500 ">Utiliza un mecanismo propio de autenticación digital para funcionarios</p>
                            </div>
                        </label>
                        <label for="bordered-radio-3">
                            <div class="flex items-center gap-2 p-3 ps-4 w-[320px] h-[90px] border border-gray-200 rounded cursor-pointer">
                                <input id="bordered-radio-3" type="radio" name="mecanismos" value="Utiliza ClaveÚnica como mecanismo de autenticación digital para funcionarios" {{ ($digital->mecanismos ?? '') == "Utiliza ClaveÚnica como mecanismo de autenticación digital para funcionarios" ? 'checked' : '' }} nclass="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                <p id="bordered-radio-3" class="text-xs font-normal text-gray-500 ">Utiliza ClaveÚnica como mecanismo de autenticación digital para funcionarios.</p>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">27. Firma electrónica Avanzada</label>
                    <span class="text-sm text-gray-400">Definición de apoyo: La firma electrónica avanzada es aquella certificada por un prestador acreditado, que ha sido creada usando medios que el titular mantiene bajo su exclusivo control, de manera que se vincule únicamente al mismo y a los datos a los que se refiere (Ley N°19.799).</span>
                    <select id="producto" name="firma_electronica" class="bg-white border border-gray-300 mt-3 mb-3 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option selected disabled>Seleccióne una opción</option>
                        <option name="firma_electronica" value="No utiliza" {{ ($digital->firma_electronica ?? '') == "No utiliza" ? 'selected' : '' }}>No utiliza</option>
                        <option name="firma_electronica" value="Utiliza firma electrónica avanzada del Estado (Firma Gob)" {{ ($digital->firma_electronica ?? '') == "Utiliza firma electrónica avanzada del Estado (Firma Gob)" ? 'selected' : '' }}>Utiliza firma electrónica avanzada del Estado (Firma Gob)</option>
                        <option name="firma_electronica" value="Utiliza firma electrónica avanzada provista por un externo" {{ ($digital->firma_electronica ?? '') == "Utiliza firma electrónica avanzada provista por un externo" ? 'selected' : '' }}>Utiliza firma electrónica avanzada provista por un externo</option>
                        <option name="firma_electronica" value="Utiliza ambos tipos de firma (FirmaGob y provista por un externo)" {{ ($digital->firma_electronica ?? '') == "Utiliza ambos tipos de firma (FirmaGob y provista por un externo)" ? 'selected' : '' }}>Utiliza ambos tipos de firma (FirmaGob y provista por un externo)</option>

                    </select>
                </div>
                @else
                <div class="flex flex-col">
                    <label class="font-semibold">27. Firma electrónica Avanzada</label>
                    <span class="text-sm text-gray-400">Definición de apoyo: La firma electrónica avanzada es aquella certificada por un prestador acreditado, que ha sido creada usando medios que el titular mantiene bajo su exclusivo control, de manera que se vincule únicamente al mismo y a los datos a los que se refiere (Ley N°19.799).</span>
                    <select id="producto" name="firma_electronica" class="bg-white border border-gray-300 mt-3 mb-3 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option selected disabled>Seleccióne una opción</option>
                        <option name="firma_electronica" value="No utiliza" {{ ($digital->firma_electronica ?? '') == "No utiliza" ? 'selected' : '' }}>No utiliza</option>
                        <option name="firma_electronica" value="Utiliza firma electrónica avanzada del Estado (Firma Gob)" {{ ($digital->firma_electronica ?? '') == "Utiliza firma electrónica avanzada del Estado (Firma Gob)" ? 'selected' : '' }}>Utiliza firma electrónica avanzada del Estado (Firma Gob)</option>
                        <option name="firma_electronica" value="Utiliza firma electrónica avanzada provista por un externo" {{ ($digital->firma_electronica ?? '') == "Utiliza firma electrónica avanzada provista por un externo" ? 'selected' : '' }}>Utiliza firma electrónica avanzada provista por un externo</option>
                        <option name="firma_electronica" value="Utiliza ambos tipos de firma (FirmaGob y provista por un externo)" {{ ($digital->firma_electronica ?? '') == "Utiliza ambos tipos de firma (FirmaGob y provista por un externo)" ? 'selected' : '' }}>Utiliza ambos tipos de firma (FirmaGob y provista por un externo)</option>

                    </select>
                </div>
                @endif


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
                        <a href="/notificaciones/{{$procedimiento->id}}" class="flex items-center text-md gap-1 p-3 underline  text-blue-900" name="action" value="guardar">Siguiente <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
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