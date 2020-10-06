@extends('kayout.app')

@section('content')

    <div class="row">
        <div class="col-lg-11">
            <h2>Producto</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('producto')}}">Atrás</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <td>Nombre:</td>
            <td>{{ $producto->nombre}}</td>
        </tr>
        <tr>
            <td>Precio:</td>
            <td>{{ $producto->precio}}</td>
        </tr>
        <tr>
            <td>Stock:</td>
            <td>{{ $producto->stock}}</td>
        </tr>
    </table>
@endsection