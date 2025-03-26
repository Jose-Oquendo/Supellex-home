<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="{{ asset('img/SupellexLogo.png') }}" alt="Logo Supellex" height="90px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        @if(auth()->user()->rol == 'admin')
          <a class="nav-link active" aria-current="page" href="{{ route('admin.index') }}">Inicio</a>
          <a class="nav-link" href="{{ route('admin.employees') }}">Empleados</a>
          <a class="nav-link" href="{{ route('admin.reports') }}">Informes</a>
        @else
          <a class="nav-link active" aria-current="page" href="{{ route('emp.index') }}">Inicio</a>
          <a class="nav-link" href="{{ route('emp.products') }}">Productos</a>
          <a class="nav-link" href="{{ route('emp.orders') }}">Pedidos</a>
        @endif
        <div class="text-end">
          <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar sesion</a>
        </div>
      </div>
    </div>
  </div>
</nav>

