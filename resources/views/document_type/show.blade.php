@extends('layout.app')

@section('content')

<h3 class="my-4 text-center">Mostrar</h3>

<a href="{{route('document_type.index')}}" class="btn btn-danger my-4">Volver</a>


<table class="table table-bordered mb-4">
<thead>
<tr>
<th>#</th>
<th>Tipo de Documento</th>
<th>Siglas</th>

</tr>
</thead>
<tbody>
@foreach($document_types as $document_type)
<tr>
<td>{{$document_type->id}}</td>
<td>{{$document_type->name}}</td>
<td>{{$document_type->acronym}}</td>

</tr>
@endforeach
</tbody>

</table>



@endsection