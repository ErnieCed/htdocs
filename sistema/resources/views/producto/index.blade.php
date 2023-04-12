@extends('layouts.app')

@section('content')
<div class="container">

<a href="{{ url('producto/create') }}" class="btn btn-success">Registrar nuevo Producto</a>
<br>

<table class= "table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Foto Producto</th>
            <th>Acciones</th>
            
        </tr>
    </thead>

    <tbody>
        @foreach( $producto as $productos )
        <tr>
            <td>{{ $productos->id }}</td>
            <td>{{ $productos->Nombre }}</td>
            <td>{{ $productos->Descripcion }}</td>
            <td>{{ $productos->Precio }}</td>
            <td>{{ $productos->Stock }}</td>
            <td>
                
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$productos->FotoProducto }}" width="100 " alt="">
            
                
            </td>



            <td>
            
            <a href="{{ url('/producto/'.$productos->id.'/edit') }}" class="btn btn-warning">
            Editar | 
            </a>
            

            <form action="{{ url('/producto/'.$productos->id ) }}" class="d-inline" method="post" >
            @csrf
            {{ method_field('DELETE') }}
            <input class=" btn btn-danger" type="submit" onclick="return confirm('Quieres borrar?')" 
            value="Borrar">


            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection