@extends('authp.layouts')

@section('content')
    


<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<form action="{{ route('authenticate') }}" method="post">
@csrf

<section class="bg-blueGray-50">
<div class="w-full lg:w-4/12 px-4 mx-auto pt-6">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
    <div class="rounded-t mb-0 px-6 py-6">
        <div class="text-center mb-3">
        <hr class="mt-6 border-b-1 border-blueGray-300">
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
        <div class="text-black-400 text-center mb-3 font-bold">
        <small>Iniciar Sesion</small>
        </div>
        <form>
        <div class="relative w-full mb-3">
            <label  for="email"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Email</label>
            <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        </div>
        <div class="relative w-full mb-3">
            <label for="password" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Password</label>
            <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 @error('password') is-invalid @enderror " placeholder="Password" id="password" name="password">
            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
        </div>
        <div>
            <label class="inline-flex items-center cursor-pointer"><input id="customCheckLogin" type="checkbox" class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"><span class="ml-2 text-sm font-semibold text-blueGray-600">Remember me</span></label>
        </div>
        <div class="text-center mt-6">
            <button class="bg-blue-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="submit" value="Login"> Sign In </button>
        </div>
        </form>
    </div>
    </div>
</div>
</section>
</form>
@endsection