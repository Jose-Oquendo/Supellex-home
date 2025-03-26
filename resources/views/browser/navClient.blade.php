<nav class="navbar-expand-md">
    <div class="container-fluid nav-1">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <form class="d-flex px-3 my-3" action="{{ route('products.catalogue') }}">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light" type="submit"><i class="fas fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="col-md-4 text-center p-0">
                <li class="navbar-brand p-0">
                    <img src="{{ asset('img/SupellexLogo.png') }}" class="SupellexLogo" alt="Logo Supellex" height="80px">
                </li>
            </div>
            <div class="col-md-4 text-center">
                @if(auth()->check())
                    <li class="nav-item"><a class="bnt-user nav-link" href="{{ route('profile') }}"><i class="fa fa-user"></i> Mi cuenta</a></li>
                    <li class="nav-item me-5"><a class="bnt-user nav-link" href="{{ route('basket') }}"><i class="fas fa-basket-shopping"></i></a></li>
                @else
                    <li class="nav-item"><a class="bnt-user nav-link" href="{{ route('login.index') }}"><i class="fa fa-user"></i> Mi cuenta</a></li>
                    <li class="nav-item me-5"><a class="bnt-user nav-link" href="{{ route('login.index') }}"><i class="fas fa-basket-shopping"></i></a></li>
                @endif
            </div>
        </div>
    </div><!--end of nav-1-->
    <div class="container-fluid nav-2 py-2">
        <div class="row-1 d-flex mb-3">
            <div class="d-block d-md-none">
                <h2>Nuestras categorias!</h2>
            </div>
            <div class="col text-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">   
                    <i class="fas fa-bars-staggered"></i>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <div class="row container-fluid">
                <div class="col-sm-4 col-lg-2 offset-lg-1 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="{{ route('products.catalogue', 'Sala') }}">Sala</a></button>
                </div>
                <div class="col-sm-4 col-lg-2 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="{{ route('products.catalogue', 'Comedores') }}">Comedores</a></button>
                </div>
                <div class="col-sm-4 col-lg-2 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="{{ route('products.catalogue', 'Alcobas') }}">Alcobas</a></button>
                </div>
                <div class="col-sm-6 col-lg-2 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="{{ route('products.catalogue', 'Oficina') }}">Oficina</a></button>
                </div>
                <div class="col-sm-6 col-lg-2 pb-1">
                    <a class="btn btn-categorie p-3 nav-link" href="{{ route('products.catalogue', 'Electronicos') }}">Electronicos</a></button>
                </div>
            </div>
        </div>
    </div>
</nav>