@extends('layouts.app')

@section('title')
show/atividade
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Show Atividade</div>

                <div class="panel-body">
            <form method = 'get' action = 'http://localhost:8000/atividade'>
                <button class = 'btn btn-primary'>Atividade Index</button>
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
                            <b><i>nome_da_atividade : </i></b>
                        </td>
                        <td>{{$atividade->nome_da_atividade}}</td>
                    </tr>



                  </tbody>
              </table>
            </div>
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  @endsection
