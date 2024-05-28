@include('menu.menu')
<style>
    .dataTables_wrapper .dataTables_length select {
        width: 60px;
    }

    .dataTables_wrapper .dataTables_filter input {
        margin-bottom: 20px;
    }
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.tailwindcss.css" />

<div class="p-4 lg:ml-64  h-full ">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex mb-10 gap-7">
            <div class="flex items-center justify-center gap-4 border p-4 border-gray-200 shadow-md h-[90px] w-[250px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-yellow-500 icon icon-tabler icons-tabler-outline icon-tabler-alert-triangle">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 9v4" />
                    <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                    <path d="M12 16h.01" />
                </svg>
                <div class="flex flex-col text-center justify-center">
                    <h5 class="text-lg text-center">Asignados</h5>
                    <h2>{{$totalAsignado}}</h2>
                </div>

            </div>
            <div class="flex items-center justify-center gap-4 border p-4 border-gray-200 shadow-md h-[90px] w-[250px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-green-400 icon icon-tabler icons-tabler-outline icon-tabler-circle-dashed-check">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95" />
                    <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44" />
                    <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92" />
                    <path d="M8.56 20.31a9 9 0 0 0 3.44 .69" />
                    <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95" />
                    <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44" />
                    <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92" />
                    <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69" />
                    <path d="M9 12l2 2l4 -4" />
                </svg>
                <div class="flex flex-col text-center justify-center">
                    <h5 class="text-lg text-center">Finalizados</h5>
                    <h2>{{ $totalFinalizado}}</h2>
                </div>

            </div>
        </div>

        <div class="w-full flex justify-center mb-10">
            <button data-modal-target="modal-crear" data-modal-toggle="modal-crear" class="flex items-center text-sm gap-4 p-3 border bg-blue-900 text-white" type="button">
                Generar nuevo procedimiento
            </button>
        </div>
        <div style="width: 100%;">
            <table id="myTable" class="" style="width: 100%;">
                <thead class="text-sm bg-blue-800 text-white">
                    <tr>
                        <th>Procedimiento</th>
                        <th>Estado</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-50">
                    @foreach ($procedimiento as $procedimientos )
                    <tr>
                        <td>{{$procedimientos->nombre}}</td>
                        <td> @if($procedimientos->estado == 'Asignado')
                            <span class="bg-orange-400 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $procedimientos->estado }}
                            </span>
                            @else
                            <span class="bg-green-600 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded">
                                {{ $procedimientos->estado }}
                            </span>
                            @endif
                        </td>
                        <td class=" flex gap-4">
                            @if($procedimientos->estado == 'Asignado')
                            <a href="/identificacion/{{$procedimientos->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg>
                            </a>
                            @else
                            @endif
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-description">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    <path d="M9 17h6" />
                                    <path d="M9 13h6" />
                                </svg></a>
                            <a data-modal-target="modal-editar-{{$procedimientos->id}}" data-modal-toggle="modal-editar-{{$procedimientos->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-checkbox">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg></a>
                            <a data-modal-target="modal-eliminar{{$procedimientos->id}}" data-modal-toggle="modal-eliminar{{$procedimientos->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg></a>
                        </td>
                    </tr>
                    @include('procedimientos.editar')
                    @include('procedimientos.delete')
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>


</div>
@include('procedimientos.create')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"></script>
<script>
    $(document).ready(function() {
        var table = new DataTable('#myTable', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
            },

            columnDefs: [{
                    orderable: false,
                    targets: 2
                },
                {
                    width: 200,
                    targets: 1
                },
            ]
        });

    });
</script>