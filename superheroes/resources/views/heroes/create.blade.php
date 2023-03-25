@extends('layouts.app')

@section('content')
<div class="container">




<form action="{{ url('/heroes') }}" method="post" enctype="multipart/form-data">
@csrf
@include('heroes.form');


</form>
</div>
@endsection