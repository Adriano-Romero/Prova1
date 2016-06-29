@extends('layouts.app')

@section('title', "Listagem de Pacientes")

@section('content')
<h1>Lista de Pacientes</h1>

<table id ='example' class="table table-striped table-bordered">
		<tr>
			<th>Nome</th>
			<th>login</th>
			 <th>Procedimentos</th>
			<th>Editar</th>
		</tr>
	</thead>
	@foreach ($pacientes as $paciente)
	<tr>
    <td> {{$paciente->nome}}</td>
     <td>{{$paciente->login}}</td>
     @foreach ($paciente->exame as $exame)
	<td>{{$exame->nome}}</td>
	</tr><tr>
     @endforeach
    <td><a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-primary">Editar</a></td>
  </tr>
	@endforeach

</table>

@stop

@section('footer')
	<script type="text/javascript" src="{!! asset('js/prova.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('js/dataTables.bootstrap.js') !!}"></script>
@stop