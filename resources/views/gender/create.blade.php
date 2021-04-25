@extends('layout.app')

@section('content')

<div class="row">
<form action="{{route('gender.store')}}" method="post">

@csrf

<div class="form-control my-4">
<label class="label" for="nombre">Nombre del Género: </label>
<input class="input" type="text" name="name" placeholder="Escriba del Género:" >
</div>

<button type="submit" class="btn btn-success"> <i class="fas fa-plus-circle"></i>  Agregar Género</button>

</form>

</div>

@endsection