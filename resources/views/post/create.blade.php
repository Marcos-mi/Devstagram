@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection
@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{route('imagenes.store')}}" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 flex fñex-col justify-center items-center" method="POST" enctype="multipart/form-data">

            </form>
        </div>
        <div class="md:w-1/2 px-10  bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo de la Publicación" class="border p-3 w-full rounded-lg @error('name')
                        border-red-500
                    @enderror"
                     value="{{old('titulo')}}"
                     />
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">Descripción</label>
                    <textarea name="descripcion" id="descripcion" placeholder="Descripción de la Publicación" class="border p-3 w-full rounded-lg > @error('name')
                        border-red-500
                        @enderror"
                        >{{old('descripcion')}}
                    </textarea> 
                    @error('titulo')
                        <p class="bg-red-500 text -white my-2 rounded-lg text-sm p-2 text-center ">{{$message}}</p>
                    @enderror
                </div>

                <input type="submit" value="Crear Publicación" class="bg-sky-600 mb-10 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg p-3"> 
            </form>
        </div>
    </div>
@endsection