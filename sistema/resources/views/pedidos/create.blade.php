@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/pedidos') }}" method="post" enctype="multipart/form-data" >
@csrf
@include('pedidos.form',['modo'=>'Crear']);

</form>
</div>
@endsection