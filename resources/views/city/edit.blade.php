@extends('layout.app')

@section('content')

<div class="row">
@foreach($cities as $city)
<form action="{{route('city.update',$city->id)}}" method="post">
@csrf
@method('PUT')


<div class="form-control my-4">
<label class="label" for="nombre">Nombre de la Ciudad: </label>
<input class="input" type="text" name="name" value="{{$city->name}}" placeholder="Escriba el País:" >
</div>

<div class="form-control my-4">
<label class="label" for="nombre">País: </label>
<select name="country_id" >
<option value="{{$city->country_id}}">{{$city->country->name}}</option>
@foreach($countries as $country)
<option value="{{$country->id}}">{{$country->name}}</option>
@endforeach
</select>
</div>


<button type="submit" class="btn btn-warning"> <i class="fas fa-edit"></i>  Actualizar Ciudad</button>

</form>
@endforeach
</div>

@endsection