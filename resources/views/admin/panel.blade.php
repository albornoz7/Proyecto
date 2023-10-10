  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://cdn.tailwindcss.com"></script>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
      <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
      <title>Document</title>
  </head>
  <body>
    
  <nav class="bg-white border-gray-200 dark:bg-gray-900">

      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="" class="flex items-center">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Gamers Marketplace</span>
      </a>

      <!-- boton Carrito-->
      <div class="flex items-center md:order-2">
        <button>
          <a href="#">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
              <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
            </svg>
          </a>
        </button>
      </div>

      
    
  


      

      <div class="flex items-center md:order-2">
          <button type="button" class="flex mr-3 text-sm" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
              <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
            </svg>
          </button>
          <!-- Dropdown menu -->
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 dark:text-white"> {{ Auth::user()->name }}</span>
              <span class="block text-sm  text-gray-500 truncate dark:text-gray-400"> {{ Auth::user()->email }}</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
              <li>
                <a href="{{route('productos.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Vender</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Productos</a>
              </li>
              
              <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                >Cerrar Sesion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </li>
            </ul>
          </div>
          <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
      </div>
      
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="{{ route('wiki') }}" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-gray-700 md:p-0 md:dark:text-blue-500" aria-current="page">WIKI GAMER</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PLAYSTATION</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">XBOX</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">NINTENDO</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PERIFERICOS</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
      

    
    
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
  </body>
  <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
  </html>