@extends('layout.app')

@section('content')

<h3 class="my-4 text-center">Paises</h3>

<a class="my-4 btn btn-primary" href="{{route('country.create')}}"> <i class="fas fa-plus-circle"></i> Insertar País</a>

<table class="table table-bordered mb-4">
<thead>
<tr>
<th>#</th>
<th>País</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach($countries as $country)
<tr>
<td>{{$country->id}}</td>
<td>{{$country->name}}</td>
<td>
<form action="{{route('country.destroy',$country->id)}}" method="post">
@csrf
@method('DELETE')
<a href="{{route('country.show',$country->id)}}" class="btn btn-primary"> <i class="fas fa-eye"></i>   Mostrar</a>
<a href="{{route('country.edit',$country->id)}}" class="btn btn-warning"> <i class="fas fa-edit"></i>    Actualizar</a>
<button type="submit" class="btn btn-danger"> <i class="fas fa-eraser"></i>  Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>

</table>

@endsection