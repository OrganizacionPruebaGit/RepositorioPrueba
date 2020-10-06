@extends('kayout.app')
@section('content')

    <div class="row">
        <div class="col-lg-11">
            <h2>Agregar nuevo producto</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-info" href="{{url('producto')}}">Atrás</a>
        </div>
    </div>
    <form action="{{route('producto.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtNombre">Nombre: </label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Digitar Nombre">
        </div>

        <div class="form-group">
            <label for="txtPrecio">Precio: </label>
            <input type="text" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Digitar Precio">
        </div>
        <div class="form-group">
            <label for="txtStock">Stock: </label>
            <input type="number" class="form-control" id="txtStock" name="txtStock" placeholder="Digitar Stock">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Agregar</button>
        </div>

    </form>

@endsection