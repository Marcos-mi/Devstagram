@extends('layouts.app')

@section('titulo')
        Inicia sesión en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-11 md:items-center">
        <div class="md:w-6/12 p-5">
            <a href=""><img src="{{asset('img/login.jpg')}}" alt="Imagen de login"></a>
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl ">
            <form method="POST" action="{{route('login')}}"  novalidate>
                @csrf
                @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-cemter ">
                    {{session('mensaje')}}</p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo electronico</label>
                    <input type="email" name="email" id="email" placeholder="Ingresa tu email para el registro" class="border p-3 w-full rounded-lg @error('email')
                    border-red-500
                    @enderror"
                    value="{{old('email')}}"
                    />
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-cemter ">{{$message}}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="Ingresa una contraseña para el registro" class="border p-3 w-full rounded-lg @error('password')
                    border-red-500
                    @enderror"
                    value="{{old('password')}}"
                    />
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-cemter ">{{$message}}</p>
                @enderror
                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remenber"> <label class=" text-gray-500 text-sm" > Mantener mi sesión abierta</label>
                </div>
                <input type="submit" value="Iniciar Sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg p-3">
            </form>
        </div>
    </div>
@endsection