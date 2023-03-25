@extends('layouts.app')

@section('content')
<div class="container">



 
<a href="{{ url('heroes/create') }}" class="btn btn-success " >Registrar nuevo empleado</a>
<br/>
<br/>

<table class= "table table light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Nombre Real</th>
            <th>Foto</th>
            <th>Información Adicional</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $heroes as $heroes )
        <tr>
            <td>{{ $heroes->id }}</td>
            <td>{{ $heroes->nombre }}</td>
            <td>{{ $heroes->nombre_real }}</td>
            <td>
                <img class=" img-thumbnail img fluid " src=" {{ (asset('storage').'/'.$heroes->foto)}} " width="50px" height="50x"/>
            {{$heroes->Foto}}

            </td>
            <td>{{ $heroes->informacion_adicional }}</td>
            <td>
                

            <a href="{{ url('/heroes/'.$heroes->id.'/edit') }}"  class= "btn btn-warning">
                    Editar
            </a>
            |
            
            <form action="{{ url('/heroes/'.$heroes->id) }}" class=" d-inline " method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class=" btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')"
            value="Borrar">
            </form>
            </td>
            <td></td>
        
        </tr>
        @endforeach
    </tbody>


</table>
</div>
@endsection