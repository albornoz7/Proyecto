@extends('layouts.plantilla')

@section('content')


<a href="{{route('productos.index')}}" class="px-4 py-2 bg-green-500 m-5 text-white rounded-lg">Productos</a>
<div class="w-3/5 mx-auto">
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error a la hora de guradar los datos </strong>Rectifique la informacion<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
    <form action="{{route('productos.update',$productos)}}" method="POST"  enctype="multipart/form-data">
    @method('PUT')       
    @csrf
    <div class="relative z-8 w-full mb-6 group">
    <input type="file" name="foto" value="{{$productos->foto}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Selecionar Foto</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
    <input type="text" name="nombre"  value="{{$productos->nombre}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"  placeholder=" " required />
    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre del Producto</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
    <input type="textarea" name="descripcion" value="{{$productos->descripcion}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
    <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripcion</label>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
    <input type="numbre" name="cantidad" value="{{$productos->cantidad}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cantidad</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
    <input type="number" name="precio" value="{{$productos->precio}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Precio</label>
    </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
    <input type="date"  name="due_date" value={{$productos->due_date}} class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
    <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fecha de Publicacion</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
    <div class="relative z-0 w-full mb-6 group">
    <strong >Estado (inicial):</strong>
    <select name="status" id="">
    <option value="En Venta">Selecionar</option>
    <option value="En Venta"@selected("En venta" == $productos->status)>En Venta</option>
    <option value="Pendiente"@selected("Pendiente" == $productos->status)>Pendiente</option>
    <option value="Vendido"@selected("Vendido" == $productos->status)>Vendido</option>
    </select>
    </div>
    </div>


    <div class="relative z-0 w-full mb-6 group">
        <div class="relative z-0 w-full mb-6 group">
        <strong >Estado (inicial):</strong>
        <select name="categoria" id="">
        <option value="PlayStation">PlayStation</option>
        <option value="Xbox">Xbox</option>
        <option value="Nintendo">Nintendo</option>
        <option value="Perifericos">Perifericos</option>
        <option value="Otros">Otros</option>
        </select>
        </div>
        </div>

    </div>


<div class="w-full md:w-[48.5%]">
    <div style="animation: scale-up-center 1s cubic-bezier(0.4, 0, 0.2, 1) both; ">
        <button type="submit" class="dark:bg-gray-400 w-full bg-slate-900 duration-200">
            <div
                class="bg-blue-400 dark:bg-slate-900 dark:border-blue-400 active:translate-x-0 active:translate-y-0 flex items-center border-slate-900 border-2 duration-200 px-4 py-2 -translate-x-1 -translate-y-1 hover:-translate-x-1.5 hover:-translate-y-1.5 w-full"
            >
                <div class="dark:text-gray-400 mr-4 flex items-center justify-center">
                    <div class="w-10 h-10">
                        
                    </div>
                </div>
                <h4 class="dark:text-gray-400 duration-200">
                    <div class="flex justify-start items-center">Actualizar</div>
                </h4>
            </div>
        </button>
    </div>
</div>
</div>

@endsection

