@extends('layouts.app')

@section('title', 'Bem-vindo ao sistema')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem-vindo</div>
                <div class="panel-body">
                    <a class="btn btn-default" href="{{ url('pacientes') }}" >Lista de Pacientes</a><br>
                    <a class="btn btn-default" href="{{ url('procedimentos') }}" >Lista de Procedimentos</a><br>
                    <a class="btn btn-default" href="{{ url('exames') }}" >Lista de Exames</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
