@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url(' /producto/'.$producto->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('producto.form');

</form>
</div>
@endsection

