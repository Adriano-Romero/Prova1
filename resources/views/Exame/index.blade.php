@extends('layouts.app')

@section('title', "Listagem de exames")
<h1>Lista de Exames</h1>

<table class="table">
		<tr>
			<th>Exame</th>
			<th>ID</th>
			<th>Sigla</th>
		</tr>
	</thead>
	@foreach ($estados as $estado)
	<tr>
    <td> {{$estado->nome}}</td>
     <td>{{$estado->id}}</td>
    <td>{{$estado->sigla}}</td>
  </tr>
	@endforeach

</table>