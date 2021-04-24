@extends('layout.app')

@section('content')

<div class="row">
<form action="{{route('position.store')}}" method="post">

@csrf

<div class="form-control my-4">
<label class="label" for="nombre">Nombre del Cargo: </label>
<input class="input" type="text" name="name" placeholder="Escriba del cargo:" >
</div>

<button type="submit" class="btn btn-success"> <i class="fas fa-plus-circle"></i>  Agregar Cargo</button>

</form>

</div>

@endsection