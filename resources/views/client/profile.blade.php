@extends('layout/index')
@section('title', 'Mi cuenta - Supellex')
@section('content')
    <nav class="bread-color" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb p-5">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mi cuenta</li>
        </ol>
    </nav>
    <section class="row my-5">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('profile') }}" class="list-group-item list-group-item-action">Inicio</a>
                <a href="{{ route('profile.orders') }}" class="list-group-item list-group-item-action">Pedidos</a>
                <a href="{{ route('profile.address') }}" class="list-group-item list-group-item-action">Mi direccion</a>
                <a href="{{ route('profile.account') }}" class="list-group-item list-group-item-action">Mi cuenta</a>
                <a href="{{ route('profile.desires') }}" class="list-group-item list-group-item-action">Mi lista de deseos</a>
                <a href="{{ route('login.destroy') }}" class="list-group-item list-group-item-action">Salir</a>
            </div>
        </div>
        <div class="col-md-9 bg-light">
            @yield('profile')
        </div>
    </section>
@endsection 