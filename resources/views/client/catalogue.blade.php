@extends('layout/index')
@section('title', 'Catalogo - Supellex')
@section('content')
    <nav class="bread-color" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb p-5">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.catalogue') }}">Catalogo</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$category}}</li>
        </ol>
    </nav>
    <h1>Nuestros productos</h1> 
    <div class="row">
        @forelse($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($product->img_url) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->price }}</p>
                        <form action="{{ route('products.details', $product->id) }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="Ver detalles">
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="my-5">No hay productos que correspondan a esa busqueda</div>
        @endforelse
    </div>
@endsection 