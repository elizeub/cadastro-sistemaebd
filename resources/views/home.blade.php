@extends('layouts.app')

@section('title')
home
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sistema de Gerenciamento e Cadastro da Escola Bíblica Dominical</div>

                <div class="panel-body">
                    <li><a href="{{ url('/sala') }}">Salas</a></li>
                    <li><a href="{{ url('/atividade') }}">Atividades</a></li>
                    <li><a href="{{ url('/matricula') }}">Matriculas</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
