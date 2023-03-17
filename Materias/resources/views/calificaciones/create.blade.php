Formulario de creacion de asignaturas

<form action="{{ url('/calificaciones') }}" method="post" enctype="multipart/form-data">
@csrf
@include('calificaciones.form');

</form>