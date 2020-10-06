
@extends('kayout.app')
@section('content')

    <div class="row">
        <div class="col-lg-11">
            <h2>Listado de Productos</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{route('producto.create')}}">Registrar</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($producto as $pro)
            <tr>
                <td>{{ $pro->id}} </td>
                <td>{{ $pro->nombre}} </td>
                <td>{{ $pro->precio}} </td>
                <td>{{ $pro->stock}} </td>
                <td>
                    <form action="{{ route('producto.destroy',$pro->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('producto.show',$pro->id)}}">Ver</a>
                        <a class="btn btn-primary" href="{{route('producto.edit',$pro->id)}}">Editar</a>
                    
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection

