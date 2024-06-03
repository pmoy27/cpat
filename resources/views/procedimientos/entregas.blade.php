<div id="modal-entrega" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900 ">
                    DETALLE DE ENTREGAS
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="modal-entrega">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4">
                <div class="col-span-2 sm:col-span-1">


                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 ">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Asignado
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Finalizado
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userse as $user)
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $user->name }}
                                    </th>
                                    <td class="px-6 py-4 text-center ">
                                        {{ $user->procedimientos_asignados ?? 0 }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $user->procedimientos_finalizados ?? 0 }}
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>






                </div>
            </div>


        </div>
    </div>
</div>