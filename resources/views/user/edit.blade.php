@extends('layouts.app')

@section('content')
<h1>Editar usuario existente</h1>

<div class="table-responsive">
    <form action="{{ route('usuarioEditarPost', $user->id) }}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="inputNombre">Nombres:</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="inputCorreo">Email:</label>
            <input type="text" name="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Deje vacio si no desea cambiar su contraseña">
        </div>
        <button type="submit" class="btn btn-default">Terminar Edicion</button>
    </form>
</div>
@endsection
