@extends('layout/main')

<div class="container mt-4">
    <h2>Agregar Nuevo Autor</h2>
    <div class="row">
        <div class="col">
            <div class="card-body">
                <form action="{{route('store')}}" method="post">
                    @csrf
                    @method('POST')
                    <label for="name">Nombre del Autor</label>
                    <input type="text" name="nombre_autor" id="nombre_autor" class="form-control" value="{{old('nombre_autor')}}">
                    @error('nombre_autor')
                        <p>
                            {{$message}}
                        </p>
                    @enderror

                    <label for="name">Nacionalidad</label>
                    <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" value="{{old('nacionalidad')}}">
                    @error('nacionalidad')
                        <p>
                            {{$message}}
                        </p>
                    @enderror
                    <button class="btn btn-primary mt-3">Agregar</button>
                    <a href="{{route('autores.index')}}" class="btn btn-secondary mt-3">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
