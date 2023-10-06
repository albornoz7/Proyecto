<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<header>

    <div class="py-4 px-2 lg:mx-4 xl:mx-12 ">
        <div class="">
            <nav class="flex items-center justify-between flex-wrap  ">
                <div class="block lg:hidden">
                    <button
                        class="navbar-burger flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white">
                        <svg class="fill-current h-6 w-6 text-gray-700" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
                <div id="main-nav" class="w-full flex-grow lg:flex items-center lg:w-auto hidden  ">
                    <div class="text-sm lg:flex-grow mt-2 animated jackinthebox xl:mx-8">
                        @guest
                        <a {{ (request()->is('login')) ? 'active' : '' }} href="{{ route('login') }}"
                            class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                            Iniciar sesion
                        </a>
                        <a {{ (request()->is('register')) ? 'active' : '' }} href="{{ route('register') }}"
                            class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                            Registrarme
                        </a>
                        @else    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                >Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                                @endguest
                    </div>
                </header>
                <div class="container">
                    @yield('content')
                </div>
                </div>
            </nav>
        </div>
    </div>






{{--  --}}
</body>


</html>