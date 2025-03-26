@extends('layout/index')
@section('title', 'Mi canasta - Supellex')
@section('content')
    <nav class="bread-color" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb p-5">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Canasta</li>
        </ol>
    </nav>
    <h1>Tu canasta</h1> 
@endsection 