@extends('layouts.app')

@section('content')
<div class="container">



<form action="{{url('/heroes/'.$heroes->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('heroes.form')

</form>
</div>
@endsection
