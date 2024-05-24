@vite(['resources/css/app.css','resources/js/app.js'])
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

<div class=" lg:ml-64  h-full ">
    <div class="flex justify-end bg-gray-800 p-2 h-10 w-full mb-10">

        <h5 class="text-white text-sm">{{$id_usuario}}</h5>
    </div>

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
                <h2>1000</h2>
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
                <h2>1000</h2>
            </div>

        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <table id="myTable" class="">
            <thead class="">
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
                    <td><span class="bg-green-600 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded ">Finalizado</span></td>
                    <td class=" flex gap-4">
                        <a href="/identificacion/{{$procedimientos->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                <path d="M16 5l3 3" />
                            </svg>
                        </a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-description">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"></script>
<script>
    $(document).ready(function() {
        var table = new DataTable('#myTable', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
            },
        });

    });
</script>