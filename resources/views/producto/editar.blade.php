@extends('kayout.app')
@section('content')

    <div class="row">
        <div class="col-lg-11">
            <h2>Editar nuevo producto</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-info" href="{{url('producto')}}">Atrás</a>
        </div>
    </div>
    <form action="{{route('producto.update', $producto->id)}}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtNombre">Nombre: </label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Digitar Nombre" value="{{ $producto->nombre}}">
        </div>

        <div class="form-group">
            <label for="txtPrecio">Precio: </label>
            <input type="text" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Digitar Precio" value="{{ $producto->precio}}">
        </div>
        <div class="form-group">
            <label for="txtStock">Stock: </label>
            <input type="number" class="form-control" id="txtStock" name="txtStock" placeholder="Digitar Stock" value="{{ $producto->stock}}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Editar</button>
        </div>

    </form>

@endsection