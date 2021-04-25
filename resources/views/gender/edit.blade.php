@extends('layout.app')

@section('content')

<div class="row">
@foreach($genders as $gender)
<form action="{{route('gender.update',$gender->id)}}" method="post">
@csrf
@method('PUT')


<div class="form-control my-4">
<label class="label" for="nombre">Nombre del Género: </label>
<input class="input" type="text" name="name" value="{{$gender->name}}" placeholder="Escriba el Género:" >
</div>

<button type="submit" class="btn btn-warning"> <i class="fas fa-edit"></i>  Actualizar Género</button>

</form>
@endforeach
</div>

@endsection