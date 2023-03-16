Formulario de creación de superheroes

<form action="{{ url('/heroes') }}" method="post" enctype="multipart/form-data">
@csrf
@include('heroes.form');


</form>