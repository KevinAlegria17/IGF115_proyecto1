@extends('layouts.app')

@section('content')
<h1>Lista de usuarios</h1>
<h4><a href="/usuarionuevo"> Registrar nuevo usuario </a></h4>

<div class="table-responsive">
    @if($users)
        <table class="table">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Email</td>
                    <td>Creado</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="{{route('usuarioEditar', $user->id)}}" class="btn btn-info">Editar</a>
                        </td>
                    </tr>
            </tbody>
                @endforeach
        </table>
    @endif
</div>
@endsection
