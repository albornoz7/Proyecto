<div class="grid grid-cols-1 md:grid-cols-4 ">
    @foreach($productos as $producto)
      <div class="!z-5 relative m-4 rounded-[20px] max-w-[300px] bg-clip-border bg-gray-200 shadow-3xl shadow-lg flex flex-col w-full !p-4 3xl:p-![18px]  undefined">
          <div class="h-full w-full">
            <div class="relative w-full">
              <img src="{{ $producto->foto }}" alt="">
            </div>
            <div class="mb-3 flex items-end justify-end px-1 mt-4">
                <div class="mb-2 ">
                    <p class="text-lg font-bold text-navy-700">{{ $producto->nombre }}</p>
                    <p class="mt-1 text-sm font-medium text-gray-600 md:mt-2">{{ $producto->descripcion }}</p>
                    <p class="mt-1 text-sm font-medium text-gray-600 md:mt-2">Precio: {{ $producto->precio }}</p>
                </div>
                <div class="flex md:mt-2 lg:mt-0">
                  <button href="" class="linear rounded-[20px] bg-brand-900 px-4 py-2 text-xs font-medium  transition duration-200 hover:bg-brand-800 active:bg-brand-700 text-white">Agregar al carrito</button>
                </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>