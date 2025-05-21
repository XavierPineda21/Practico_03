@extends('layout/main')

@section('contenido')
    <div class="container mt-4">
        <h2>CRUD AUTORES</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('create') }}" class="btn btn-primary">
                            <i class="fa-solid fa-user-plus"></i> Agregar
                        </a>
                        <hr>

                        <table class="table table-sm table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Autor</th>
                                    <th>Nacionalidad</th>
                                    <th>Operaciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($autores as $autor)  
                                <tr>
                                    <td>{{$autor-> codigo_autor}}</td>
                                    <td>{{$autor-> nombre_autor}}</td>
                                    <td>{{$autor-> nacionalidad}}</td>
                                    <td>
                                        <form action="{{route('destroy', $autor->codigo_autor)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('show', $autor->codigo_autor)}}" class="btn btn-info"> <i class="fa-solid fa-list"></i> Detalles</a>
                                            <a href="{{route('edit', $autor->codigo_autor)}}" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i> Editar</a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> Borrar</button>
                                        </form>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td>No hay datos en la tabla ...</td>
                                </tr>
                                
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection
