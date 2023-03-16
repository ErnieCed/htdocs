Mostrar lista de superheroes 
<a href="{{ url('heroes/create') }}"></a>
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
        @foreach($heroes as $heroes )
        <tr>
            <td>{{ $heroes->id }}</td>
            <td>{{ $heroes->nombre }}</td>
            <td>{{ $heroes->nombre_real }}</td>

            


            @foreach($heroes as $heroes) 
            <tr>
            <td>{{$heroes->id}}</td>
            <td>
                <img width="50px" height="50x" src="{{asset('storage'.'/'.$heroes->Foto)}}"/>
            {{$heroes->Foto}}

            </td>
            <td>{{ $heroes->informacion_adicional }}</td>
            <td>
                
            <a href="{{ url('/heroes/'.$heroes->id.'/edit') }}">
                    Editar
            </a>
            |
            
            <form action="{{ url('/heroes/'.$heroes->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Deseas borrar?')"
            value="Borrar">

            </form>
                

            
            </td>
            @endforeach
        </tr>
        @endforeach
    </tbody>


</table>