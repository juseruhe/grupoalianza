@extends('layout.app')

@section('content')

<h3 class="my-4 text-center">Mostrar</h3>

<a href="{{route('country.index')}}" class="btn btn-danger my-4">Volver</a>


<table class="table table-bordered mb-4">
<thead>
<tr>
<th>#</th>
<th>País</th>

</tr>
</thead>
<tbody>
@foreach($countries as $country)
<tr>
<td>{{$country->id}}</td>
<td>{{$country->name}}</td>

</tr>
@endforeach
</tbody>

</table>



@endsection