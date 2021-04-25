@extends('layout.app')

@section('content')

<div class="row">
@foreach($document_types as $document_type)
<form action="{{route('document_type.update',$document_type->id)}}" method="post">
@csrf
@method('PUT')


<div class="form-control my-4">
<label class="label" for="nombre">Nombre del Tipo de Documento: </label>
<input class="input" type="text" name="name" value="{{$document_type->name}}" placeholder="Escriba el País:" >
</div>

<div class="form-control my-4">
<label class="label" for="nombre">Nombre del Tipo de Documento: </label>
<input class="input" type="text" name="name" value="{{$document_type->acronym}}" placeholder="Escriba el País:" >
</div>

<button type="submit" class="btn btn-warning"> <i class="fas fa-edit"></i>  Actualizar Tipo de Documento</button>

</form>
@endforeach
</div>

@endsection