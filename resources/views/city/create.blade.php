@extends('layout.app')

@section('content')

<div class="row">
<form action="{{route('city.store')}}" method="post">

@csrf

<div class="form-control my-4">
<label class="label" for="nombre">Nombre de la Ciudad: </label>
<input class="input" type="text" name="name" placeholder="Escriba el País:" >
</div>

<div class="form-control my-4">
<label class="label" for="nombre">País: </label>
<select name="country_id" >
@foreach($countries as $country)
<option value="{{$country->id}}">{{$country->name}}</option>
@endforeach
</select>
</div>

<button type="submit" class="btn btn-success"> <i class="fas fa-plus-circle"></i>  Agregar Ciudad</button>

</form>

</div>

@endsection