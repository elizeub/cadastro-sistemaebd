@extends('layouts.app')

@section('title')
welcome
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem vindo ao Sistema EBD</div>

                <div class="panel-body">
                    <p>Bem vindo!</p>
                    <p>Esta é a página inicial do sistema de cadastros
                    da Escola Bíblica Dominical.</p>
                    <p>Para usar todas as funcionalidades
                    você precisa estar logado.</p>
                    <br>
                    <hr>
                    <center>
                    <b>@include('includes.versiculos')</b>
                  </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
