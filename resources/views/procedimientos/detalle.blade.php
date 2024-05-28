@include('menu.menu')
<div class="p-4 lg:ml-64  h-full ">
    <div class="flex justify-between gap-5 mt-5 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            <h5>{{$procedimiento->nombre}}</h5>
        </div>
        <div class="flex gap-4">
            <button>Editar</button>
            <button data-modal-target="modal-eliminar" data-modal-toggle="modal-eliminar">Eliminar</button>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@include('procedimientos.delete')