@extends('layouts.app')

@section('title')
show/matricula
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Show Matricula</div>

                <div class="panel-body">
            <form method = 'get' action = 'http://localhost:8000/matricula'>
                <button class = 'btn btn-primary'>Matricula Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>


                    <tr>
                        <td>
                            <b><i>nome : </i></b>
                        </td>
                        <td>{{$matricula->nome}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>sexo : </i></b>
                        </td>
                        <td>{{$matricula->sexo}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>data_nascimento : </i></b>
                        </td>
                        <td>{{$matricula->data_nascimento}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>endereco : </i></b>
                        </td>
                        <td>{{$matricula->endereco}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>bairro : </i></b>
                        </td>
                        <td>{{$matricula->bairro}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>cidade : </i></b>
                        </td>
                        <td>{{$matricula->cidade}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>telefone : </i></b>
                        </td>
                        <td>{{$matricula->telefone}}</td>
                    </tr>




                        <tr>
                        <td>
                            <b><i>nome_da_sala : </i><b>
                        </td>
                        <td>{{$matricula->sala->nome_da_sala}}</td>
                        </tr>



                        <tr>
                        <td>
                            <b><i>nome_da_atividade : </i><b>
                        </td>
                        <td>{{$matricula->atividade->nome_da_atividade}}</td>
                        </tr>



                </tbody>
            </table>
          </div>
      </div>
  </div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  @endsection
