@extends('layout/main')

<div class="container mt-4">
    <h2>Detalles de: {{$item->nombre_autor}}</h2>
    <div class="row">
        <div class="col">
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Nacionalidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$item->codigo_autor}}</td>
                            <td>{{$item->nombre_autor}}</td>
                            <td>{{$item->nacionalidad}}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{route('autores.index')}}" class="btn btn-secondary mt-4">Cancelar</a>
            </div>
        </div>
    </div>
</div>