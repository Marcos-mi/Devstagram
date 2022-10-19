@extends('layouts.app')

@section('titulo')
        Registrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-11 md:items-center">
        <div class="md:w-6/12 p-5">
            <a href=""><img src="{{asset('img/registrar.jpg')}}" alt="Imagen de registro"></a>
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl ">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Ingresa tu Nombre" class="border p-3 w-full rounded-lg @error('name')
                        border-red-500
                    @enderror"
                     value="{{old('name')}}"
                     />
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-cemter ">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Usuario</label>
                    <input type="text" name="username" id="username" placeholder="Ingresa tu nombre de usuario" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo electronico</label>
                    <input type="email" name="email" id="email" placeholder="Ingresa tu email para el registro" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="Ingresa una contraseña para el registro" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repita su contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repita su contraseña para el registro" class="border p-3 w-full rounded-lg">
                </div>

                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg p-3">
            </form>
        </div>
    </div>
@endsection