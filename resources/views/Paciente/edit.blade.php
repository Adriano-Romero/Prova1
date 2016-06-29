@extends('layouts.app')

@section('title', "Editar paciente")

@section('content')
	{!! Form::model($paciente, ['route' => ['pacientes.update', $pacientes->id}], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

		<div class="btn-group pull-right">
			{!! Form::submit("Add", ['class' => 'btn btn-Add']) !!}
		</div>

	{!! Form::close() !!}
@stop