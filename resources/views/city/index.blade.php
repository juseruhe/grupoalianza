@extends('layout.app')

@section('content')

<h3 class="my-4 text-center">Ciudades</h3>

<a class="my-4 btn btn-primary" href="{{route('city.create')}}"> <i class="fas fa-plus-circle"></i> Insertar Ciudad</a>

<table class="table table-bordered mb-4">
<thead>
<tr>
<th>#</th>
<th>Ciudad</th>
<th>País</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach($cities as $city)
<tr>
<td>{{$city->id}}</td>
<td>{{$city->name}}</td>
<td>{{$city->country->name}}</td>
<td>
<form action="{{route('city.destroy',$city->id)}}" method="post">
@csrf
@method('DELETE')
<a href="{{route('city.show',$city->id)}}" class="btn btn-primary"> <i class="fas fa-eye"></i>   Mostrar</a>
<a href="{{route('city.edit',$city->id)}}" class="btn btn-warning"> <i class="fas fa-edit"></i>    Actualizar</a>
<button type="submit" class="btn btn-danger"> <i class="fas fa-eraser"></i>  Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>

</table>

@endsection