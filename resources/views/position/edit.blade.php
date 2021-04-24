@extends('layout.app')

@section('content')

<div class="row">
@foreach($positions as $position)
<form action="{{route('position.update',$position->id)}}" method="post">
@csrf
@method('PUT')


<div class="form-control my-4">
<label class="label" for="nombre">Nombre del Cargo: </label>
<input class="input" type="text" name="name" value="{{$position->name}}" placeholder="Escriba el País:" >
</div>

<button type="submit" class="btn btn-warning"> <i class="fas fa-edit"></i>  Actualizar País</button>

</form>
@endforeach
</div>

@endsection