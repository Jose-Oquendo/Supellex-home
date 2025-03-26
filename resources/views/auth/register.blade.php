@extends('layout/index')
@section('title', 'Registro - Supellex')
@section('content')
    <nav class="bread-color" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb p-5">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('login.index') }}">Ingreso</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registro</li>
        </ol>
    </nav>
    <div class="p-3 bg-light mb-5">
        <div class="aling-center text-center">
            <img src="" alt="Logo"><i class="fa-brands fa-slack"></i></img>
        </div>
        <h2>Registrate</h2>
        <div class="m-3 py-3">
            <form method="POST">
                @csrf
                <div class="row py-3">
                    <div class="col-md-6">
                        <label class="form-label" for="name">Nombre:</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="last_name">Apellido:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Apellido" required>
                    </div>
                </div>
                @error('password')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <p>Las contraseñas no coinciden, por favor, intentar nuevamente</p>
                    </div>
                @enderror
                <div class="row py-3">
                    <div class="col-md-6">
                        <label class="form-label" for="password">Contraseña:</label>
                        <input type="password" class="form-control" name="password" placeholder="******" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="password_confirmation">Confirma tu contraseña:</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="******" required>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-6">
                        <label class="form-label" for="email">Correo:</label>
                        <input type="email" class="form-control" name="email" placeholder="@correo" required>
                    </div>
                </div>
                <div >
                    <input type="submit" class="btn btn-secondary" value="Registrarse">
                </div>
            </form>
        </div>
    </div> 
@endsection