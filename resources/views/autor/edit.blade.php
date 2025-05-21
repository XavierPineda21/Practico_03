@extends('layout/main')

<div class="container mt-4">
    <h2>Editar Autor</h2>
    <div class="row">
        <div class="col">
            <div class="card-body">
                <form action="{{route('update',$item->codigo_autor)}}" method="post">
                    @csrf
                    @method('PUT')
                    <label for="name">Nombre del Autor</label>
                    <input type="text" name="nombre_autor" id="nombre_autor" class="form-control" value="{{$item->nombre_autor}}">
                    @error('nombre_autor')
                        <p>
                            {{$message}}
                        </p>
                    @enderror
                    <label for="name">Nacionalidad</label>
                    <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" value="{{$item->nacionalidad}}">
                    @error('nacionalidad')
                        <p>
                            {{$message}}
                        </p>
                    @enderror
                    <button class="btn btn-warning mt-3">Actualizar</button>
                    <a href="{{route('autores.index')}}" class="btn btn-secondary mt-3">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>