@extends('layout.app')

@section('content')

<h3 class="my-4 text-center">Géneros</h3>

<a class="my-4 btn btn-primary" href="{{route('gender.create')}}"> <i class="fas fa-plus-circle"></i> Insertar Género</a>

<table class="table table-bordered mb-4">
<thead>
<tr>
<th>#</th>
<th>Género</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach($genders as $gender)
<tr>
<td>{{$gender->id}}</td>
<td>{{$gender->name}}</td>
<td>
<form action="{{route('gender.destroy',$gender->id)}}" method="post">
@csrf
@method('DELETE')
<a href="{{route('gender.show',$gender->id)}}" class="btn btn-primary"> <i class="fas fa-eye"></i>   Mostrar</a>
<a href="{{route('gender.edit',$gender->id)}}" class="btn btn-warning"> <i class="fas fa-edit"></i>    Actualizar</a>
<button type="submit" class="btn btn-danger"> <i class="fas fa-eraser"></i>  Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>

</table>

@endsection