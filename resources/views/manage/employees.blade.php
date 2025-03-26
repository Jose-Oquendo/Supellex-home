@extends('layout/main')
@section('content')
    <h1>Lista de empleados del sistema</h1>
    <div class="row">
        <div class="col-md-4">
            <form method="post">
                @csrf
                <label class="form-label" name="name">Nombre:</label>
                <input class="form-control" name="name" type="text" required>

                <label class="form-label" name="last_name">Apellido:</label>
                <input class="form-control" name="last_name" type="text" required>

                <label class="form-label" name="email">Correo:</label>
                <input class="form-control" name="email" type="email" required>

                @error('password')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <p>Las contraseñas no coinciden, por favor, intentar nuevamente</p>
                    </div>
                @enderror

                <label class="form-label" for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password" placeholder="******" required>

                <label class="form-label" for="password_confirmation">Confirma tu contraseña:</label>
                <input type="password" class="form-control mb-5" name="password_confirmation" placeholder="******" required>

                <input class="btn btn-primary" type="submit" value="Agregar">
            </form>
        </div>
        <div class="col-md-8 table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        ¿Esta seguro de querer elimar este usuario?
                                        <p>{{ $employee->name }} - {{ $employee->last_name }}</p>
                                        <p>{{ $employee->email }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                                    <form>
                                        @csrf
                                        <input class="btn btn-primary" type="submit" value="Aceptar">
                                    </form><!--sumit position-->
                                </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection