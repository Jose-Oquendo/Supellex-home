@extends('layout/index')
@section('title', 'Catalogo - Supellex')
@section('content')
    <nav class="bread-color" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb p-5">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.catalogue') }}">Catalogo</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
        </ol>
    </nav>
    <div class="row my-5">
        <div class="col-md-5">
            <img src="{{ asset($product->img_url) }}" alt="foto_producto" height="500"></img>
        </div>
        <div class="col-md-7">
            <h1>{{$product->title}}</h1>
            <h4 class="text-danger">$ {{$product->price}} Pesos colombianos</h4>
            <p>{{ $product->description }}</p>
            <div class="mt-5">
                Cantidad disponible: <input value="{{ $product->quantity }}" class="form-input" disabled readonly>
            </div>
        </div>
    </div>
@endsection 