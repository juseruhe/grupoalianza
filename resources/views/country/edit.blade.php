@extends('layout.app')

@section('content')

<div class="row">
@foreach($countries as $country)
<form action="{{route('country.update',$country->id)}}" method="post">
@csrf
@method('PUT')


<div class="form-control my-4">
<label class="label" for="nombre">Nombre del País: </label>
<input class="input" type="text" name="name" value="{{$country->name}}" placeholder="Escriba el País:" >
</div>

<button type="submit" class="btn btn-warning"> <i class="fas fa-edit"></i>  Actualizar País</button>

</form>
@endforeach
</div>

@endsection