@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/pedidos/'.$pedido->id ) }}" method="post" enctype="multipart/form-data" >
@csrf
{{ method_field('PATCH') }}

@include('pedidos.form',['modo'=>'Editar']);

</form>
</div>
@endsection
