@extends('layouts.app')

@section('title', "Listagem de procediments")
@section('content')

<h1>Lista de Procedimentos</h1>

<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Procedimentos</th>
			<th>id</th>
			<th>Preço</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($procedimentos as $procedimento)
	<tr>
    <td> {{$procedimento->nome}}</td>
     <td>{{$procedimento->id}}</td>
    <td>{{$procedimento->preco}}</td>
  </tr>
	@endforeach
	</tbody>
</table>

@stop

@section('footer')
	<script type="text/javascript" src="{ asset('js/prova.js') }"></script>
@stop