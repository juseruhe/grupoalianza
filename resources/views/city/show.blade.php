@extends('layout.app')

@section('content')

<h3 class="my-4 text-center">Mostrar</h3>

<a href="{{route('city.index')}}" class="btn btn-danger my-4">Volver</a>


<table class="table table-bordered mb-4">
<thead>
<tr>
<th>#</th>
<th>Ciudad</th>
<th>País</th>

</tr>
</thead>
<tbody>
@foreach($cities as $city)
<tr>
<td>{{$city->id}}</td>
<td>{{$city->name}}</td>
<td>{{$city->country->name}}</td>

</tr>
@endforeach
</tbody>

</table>



@endsection