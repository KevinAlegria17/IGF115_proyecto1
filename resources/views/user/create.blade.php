@extends('layouts.app')

@section('content')
<h1>Crear nuevo usuario</h1>

<div class="table-responsive">
    <form action="{{ route('usuarioCrearPost') }}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="inputNombre">Nombres:</label>
            <input type="text" name="name" class="form-control" placeholder="Digite nombres">
        </div>
        <div class="form-group">
            <label for="inputCorreo">Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Digite Correo electronico">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Digite una contraseña">
        </div>
        <button type="submit" class="btn btn-default">Registrar</button>
    </form>
</div>
@endsection
