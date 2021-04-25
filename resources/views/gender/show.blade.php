@extends('layout.app')

@section('content')

<h3 class="my-4 text-center">Mostrar</h3>

<a href="{{route('gender.index')}}" class="btn btn-danger my-4">Volver</a>


<table class="table table-bordered mb-4">
<thead>
<tr>
<th>#</th>
<th>Género</th>

</tr>
</thead>
<tbody>
@foreach($genders as $gender)
<tr>
<td>{{$gender->id}}</td>
<td>{{$gender->name}}</td>

</tr>
@endforeach
</tbody>

</table>



@endsection