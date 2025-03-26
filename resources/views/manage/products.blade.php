@extends('layout/main')
@section('content')
    <h1>Lista de productos en el catalogo</h1>
    <div class="row">
        <div class="col-md-3">
            @if($edit != null)
                <form method="post" action="{{ route('products.update', $edit->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <label class="form-label" name="title">Titulo:</label>
                    <input class="form-control" name="title" value="{{ $edit->title }}" type="text">

                    <label class="form-label" name="description">Descripcion:</label>
                    <textarea class="form-control" name="description">{{ $edit->description }}</textarea>

                    <label class="form-label" name="quantity">Cantidad:</label>
                    <input class="form-control" name="quantity" value="{{ $edit->quantity }}" type="number">

                    <label class="form-label" name="price">Precio:</label>
                    <input class="form-control" name="price" value="{{ $edit->price }}" type="number">

                    <label class="form-label" name="Category_id">Categoria:</label>
                    <select class="form-select" name="Category_id">
                        @foreach($categories as $category)
                            @if($edit->Category_id == $category->id)
                                <option selected>{{ $category->NameCategorie }}</option>
                            @else
                                <option>{{ $category->NameCategorie }}</option>
                            @endif
                        @endforeach
                    </select>

                    <label class="form-label" name="img_url">Imagen:</label>
                    <input class="form-control" name="img_url" type="file" value="{{ asset($edit->img_url) }}">
                    <p class="form-text">La imagen no se cambiara si no se carga una nueva</p>
                    <p class="form-text">La imagen actual es: <img src="{{ asset($edit->img_url) }}" alt="producto" height="200"></img></p>

                    <input class="btn btn-success mt-5" type="submit" value="Actualizar">
                    <a href="{{ route('emp.products') }}" class="btn btn-secondary mt-5">Regresar</a>
                </form>
            @else
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="form-label" name="title">Titulo:</label>
                    <input class="form-control" name="title"  type="text">

                    <label class="form-label" name="description">Descripcion:</label>
                    <textarea class="form-control" name="description"></textarea>

                    <label class="form-label" name="quantity">Cantidad:</label>
                    <input class="form-control" name="quantity" type="number">

                    <label class="form-label" name="price">Precio:</label>
                    <input class="form-control" name="price" type="number">

                    <label class="form-label" name="Category_id">Categoria:</label>
                    <select class="form-select" name="Category_id">
                        @foreach($categories as $category)
                            <option>{{ $category->NameCategorie }}</option>
                        @endforeach
                    </select>

                    <label class="form-label" name="img_url">Imagen:</label>
                    <input class="form-control" name="img_url" type="file" >

                    <input class="btn btn-primary mt-5" type="submit" value="Agregar">
                </form>
            @endif
        </div>
        <div class="col-md-9 table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            @foreach($categories as $category)
                                @if($category->id == $product->id)
                                    <td>{{ $category->NameCategorie }}</td>
                                @endif
                            @endforeach
                            <td><img src="{{ asset($product->img_url) }}" alt="producto" height="50"></img></td>
                            <td>
                                <form action="{{ route('emp.products', $product->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary mb-2">Editar</button>
                                </form>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        <!--Modal for delete product-->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        ¿Esta seguro de querer elimar este producto?
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