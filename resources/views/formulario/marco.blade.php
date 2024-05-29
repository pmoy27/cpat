@include('menu.menu')
<div class="p-4 lg:ml-64  h-full ">
    <div class="flex gap-5 mt-5 max-w-8xl mx-auto sm:px-6 lg:px-8">
        @include('menu.minmenu')
        <div class="p-3 shadow-lg w-full border mb-10 border-gray-200 rounded-lg">
            <h5 class="text-lg font-semibold p-3">Marco Teorico</h5>
            <form class="mt-5 p-3 flex flex-col gap-5" action="{{route('formulario.crear')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$procedimiento->id}}" name="id_procedimiento">
                <div class="flex flex-col">

                    <label class="font-semibold">8. Número Ley</label>
                    <span class="text-sm text-gray-400">Indique el número de la Ley de la cual emana o se origina este registro.</span>
                    <input type="text" name="n_ley" value="{{ old('n_ley', isset($marco) ? $marco->n_ley  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">9. URL de la Ley en LeyChile (Biblioteca del Congreso Nacional de Chile)</label>

                    <input type="url" name="url_ley" maxlength="600" value="{{ old('url_ley', isset($marco) ? $marco->url_ley  : '') }}" placeholder="Formato: https://www.ejemplo.cl" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                </div>
                <div class="flex flex-col">
                    <label class="font-semibold">10. Otras fuentes normativas</label>
                    <span class="text-sm text-gray-400">Señale otra(s) fuente(s) adicional(es) a la Ley que regulen de manera complementaria este registro.</span>
                    <div class="flex mt-4 gap-11">
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="Si" name="fuentes_normativas" {{ ($marco->fuentes_normativas ?? '') == "Si" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields('Si')">
                            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 ">Si</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="No" name="fuentes_normativas" {{ ($marco->fuentes_normativas ?? '') == "No" ? 'Checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 " onclick="toggleFields('No')">
                            <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 ">No</label>
                        </div>
                    </div>
                </div>
                <div id="additional-fields" style="display: none; padding:10px;">
                    <div class="flex flex-col">
                        <label class="font-semibold">Tipo de fuente normativa</label>
                        <input type="text" name="tipo_fuente" value="{{ old('tipo_fuente', isset($marco) ? $marco->tipo_fuente  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold">Nombre fuente normativa</label>
                        <input type="text" name="nombre_fuente" value="{{ old('nombre_fuente', isset($marco) ? $marco->nombre_fuente  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold">URL de la otra fuente normativa</label>

                        <input type="text" name="url_fuente" maxlength="600" value="{{ old('url_fuente', isset($marco) ? $marco->url_fuente  : '') }}" class="bg-white border border-gray-300 text-gray-900 text-sm mt-3 rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
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
                        @if ($procedimiento->Tipo_procedimiento == 'Procedimiento administrativo de función específica')
                        <a href="/usuario/{{$procedimiento->id}}" class="flex items-center text-md gap-1 p-3 underline  text-blue-900" name="action" value="guardar">Siguiente <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg></a>
                        @else
                        <a href="/soporte/{{$procedimiento->id}}" class="flex items-center text-md gap-1 p-3 underline  text-blue-900" name="action" value="guardar">Siguiente <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg></a>
                        @endif
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
        if (value === 'Si') {
            additionalFields.style.display = 'block';
        } else {
            additionalFields.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Obtener el valor del radio button seleccionado al cargar la página
        const selectedValue = document.querySelector('input[name="fuentes_normativas"]:checked');
        if (selectedValue) {
            toggleFields(selectedValue.value);
        }
    });
</script>