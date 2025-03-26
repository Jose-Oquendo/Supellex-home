@extends('layout/index')
@section('title', 'Catalogo - Supellex')
@section('content')
    <nav class="bread-color" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb p-5">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
        </ol>
    </nav>
    <h1>Acerca de nosotros</h1> 
    <div class="">
        Acerca de nosotros
    </div>
@endsection 