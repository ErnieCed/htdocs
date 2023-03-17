Mostrar tabla de calificaciones
<a href="{{ url(' calificaciones/create ') }}">Registrar nueva asignatura</a>
<table class="table table light">
    <thead>
        <tr>
            <th></th>
            <th>Asignatura</th>
            <th>Actividad 1</th>
            <th>Calificación Actividad 1</th>
            <th>Actividad 2</th>
            <th>Calificación Actividad 2</th>
            <th> Acciones </th>
        </tr>


    </thead>

    <tbody>
        @foreach($calificaciones as $Calificaciones)
        
        <tr>
            <td>{{ $Calificaciones->id }}</td>
            <td>{{ $Calificaciones->Asignatura }}</td>
            <td>{{ $Calificaciones->Actividad1}}</td>
            <td>{{ $Calificaciones->Calificacion_Act1 }}</td>
            <td>{{ $Calificaciones->Actividad2 }}</td>
            <td>{{ $Calificaciones->Calificacion_Act2 }}</td>
            <td>
            
            <a href="{{ url('/calificaciones/'.$Calificaciones->id.'/edit' ) }}">
                Editar 
            </a>
            
            
            | 
                
            <form action="{{ url('/calificaciones/'.$Calificaciones->id) }}" method="post">
            @csrf
            {{ method_field ('DELETE') }}
            <input type="submit" onclick="return confirm(' ¿Deseas borrar el registro? ')"
            value="Borrar">


            </form>




            </td>
        </tr>
        @endforeach
    </tbody>

</table>