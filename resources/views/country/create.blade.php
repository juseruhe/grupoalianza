@extends('layout.app')

@section('content')

<div class="row">
<form action="{{route('country.store')}}" method="post">

@csrf

<div class="form-control my-4">
<label class="label" for="nombre">Nombre del País: </label>
<input class="input" type="text" name="name" placeholder="Escriba el País:" >
</div>

<button type="submit" class="btn btn-success"> <i class="fas fa-plus-circle"></i>  Agregar País</button>

</form>

</div>

@endsection