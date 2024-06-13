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


    <div class="flex mb-10 justify-center gap-7">
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
        <div class="flex items-center justify-center gap-4 border p-4 border-gray-200 shadow-md h-[90px] w-[250px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon text-blue-700 icon-tabler icons-tabler-outline icon-tabler-book-upload">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5" />
                <path d="M11 16h-5a2 2 0 0 0 -2 2" />
                <path d="M15 16l3 -3l3 3" />
                <path d="M18 13v9" />
            </svg>
            <div class="flex flex-col text-center justify-center">
                <h5 class="text-lg text-center">Publicados</h5>
                <h2>{{ $totalPublicados}}</h2>
            </div>

        </div>
    </div>

    <div class="w-full flex justify-between mb-10">
        <button data-modal-target="modal-crear" data-modal-toggle="modal-crear" class="flex items-center text-sm gap-4 p-3 border bg-blue-900 text-white" type="button">
            Generar nuevo procedimiento
        </button>
        <a data-modal-target="modal-entrega" data-modal-toggle="modal-entrega" class="flex items-center text-sm gap-2 p-3 border cursor-pointer bg-blue-900 text-white" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-zoom-scan">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                <path d="M8 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                <path d="M16 16l-2.5 -2.5" />
            </svg> Detalle de entregas
        </a>
    </div>
    <div style="width: 100%;">
        <table id="myTable" class="" style="width: 100%;">
            <thead class="text-sm bg-blue-800 text-white">
                <tr>
                    <th>Procedimiento</th>
                    <th>Tipo de Procedimiento</th>
                    <th>Estado</th>
                    <th>Usuario</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody class="bg-gray-50">
                @foreach ($procedimiento as $procedimientos )
                <tr>
                    <td>{{$procedimientos->nombre}}</td>
                    <td>{{$procedimientos->Tipo_procedimiento}}</td>
                    <td> @if($procedimientos->estado == 'Asignado')
                        <span class="bg-orange-400 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded">
                            {{ $procedimientos->estado }}
                        </span>
                        @elseif ($procedimientos->estado == 'Finalizado')
                        <span class="bg-green-600 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded">
                            {{ $procedimientos->estado }}
                        </span>
                        @else
                        <span class="bg-blue-600 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded">
                            {{ $procedimientos->estado }}
                        </span>
                        @endif
                    </td>
                    <td>
                        {{$procedimientos->id_usuario}}
                    </td>
                    <td class=" flex gap-4">

                        <a href="/identificacion/{{$procedimientos->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                <path d="M16 5l3 3" />
                            </svg>
                        </a>

                        <a href="/detalle/{{$procedimientos->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-description">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                <path d="M9 17h6" />
                                <path d="M9 13h6" />
                            </svg></a>

                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>




</div>
@include('procedimientos.create')
@include('procedimientos.entregas')

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