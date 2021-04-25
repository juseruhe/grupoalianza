@extends('layout.app')

@section('content')

<div class="row">
<form action="{{route('document_type.store')}}" method="post">

@csrf

<div class="form-control my-4">
<label class="label" for="nombre">Nombre del Tipo de Documento: </label>
<input class="input" type="text" name="name" placeholder="Escriba el País:" >
</div>

<div class="form-control my-4">
<label class="label" for="nombre">Siglas: </label>
<input class="input" type="text" name="acronym" placeholder="Escriba Siglas:" >
</div>



<button type="submit" class="btn btn-success"> <i class="fas fa-plus-circle"></i>  Agregar Tipo de Documento</button>

</form>

</div>

@endsection