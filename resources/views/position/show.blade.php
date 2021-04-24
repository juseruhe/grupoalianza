@extends('layout.app')

@section('content')

<h3 class="my-4 text-center">Mostrar</h3>

<a href="{{route('position.index')}}" class="btn btn-danger my-4">Volver</a>


<table class="table table-bordered mb-4">
<thead>
<tr>
<th>#</th>
<th>Cargo</th>

</tr>
</thead>
<tbody>
@foreach($positions as $position)
<tr>
<td>{{$position->id}}</td>
<td>{{$position->name}}</td>

</tr>
@endforeach
</tbody>

</table>



@endsection