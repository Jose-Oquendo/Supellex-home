@extends('layout/index')
@section('title', 'Bienvenido a Supellex')
@section('content')
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="presentation1 carousel-item active">
                <img src="{{ asset('img/home/presentation1.jpg') }}" class="d-block h-100 w-100 img-presentation" alt="Imagen de Darkmoon_Art en Pixabay" height="250px">
            </div>
            <div class="presentation2 carousel-item">
                <img src="{{ asset('img/home/presentation2.jpg') }}" class="d-block h-100 w-100 img-presentation" alt="Imagen de Pexels en Pixabay" height="250px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<div class="row mt-5">
    <div class="col-md-6">
        <div class="card card-categorie">
            <a href="{{ route('products.catalogue', 'Sala') }}">
                <img src="{{ asset('img/home/categorie-living-room_auto_x2.jpg') }}" class="card-img" alt="Imagen de StockSnap en Pixabay">
                <div class="card-img-overlay categorie-tittle">
                    <p class="card-title"> Salas</p>
                </div>
            </a>    
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-categorie">
            <a href="{{ route('products.catalogue', 'Comedores') }}">
                <img src="{{ asset('img/home/categorie-dining-room.jpg') }}" class="card-img" alt="Imagen de ErikaWittlieb en Pixabay">
                <div class="card-img-overlay categorie-tittle">
                    <p class="card-title"> Comedores</p>
                </div>
            </a> 
        </div>
    </div>
</div>
<div class="row my-3">
    <div class="col-md-4">
        <div class="card card-categorie">
            <a href="{{ route('products.catalogue', 'Alcobas') }}">
                <img src="{{ asset('img/home/categorie-bedroom.jpg') }}" class="card-img" alt="Imagen de khiem tran en Pixabay ">
                <div class="card-img-overlay categorie-tittle">
                    <p class="card-title"> Alcobas</p>
                </div>
            </a> 
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-categorie">
            <a href="{{ route('products.catalogue', 'Oficina') }}">
                <img src="{{ asset('img/home/categorie-ofice.jpg') }}" class="card-img" alt="Imagen de ErikaWittlieb en Pixabay ">
                <div class="card-img-overlay categorie-tittle">
                    <p class="card-title">Oficina</p>    
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-categorie">
            <a href="{{ route('products.catalogue', 'Electronicos') }}"><img src="{{ asset('img/home/categorie-electr.jpg') }}" class="card-img" alt="Imagen de JamesDeMers en Pixabay ">
                <div class="card-img-overlay categorie-tittle">
                    <p class="card-title "> Electronicos</p>
                </div>
            </a> 
        </div>
    </div>
</div>
<!-- <section>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="d-flex p-5">
                    @for($i = 1; $i < 5; $i++)
                        <div class="card mx-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="d-flex p-5">
                    @for($i = 1; $i < 5; $i++)
                        <div class="card mx-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection
@section('home.register')
<div class="container-fluid bg-light p-5">
    <div class="text-center fs-5">
        <h2>Comienza a disfrutar tu espacio</h2>
        <p>Registrarte!</p>
        <a class="btn btn-secondary my-3" href="{{ route('register.index') }}">Registrarse</a>
    </div>
</div>
@endsection