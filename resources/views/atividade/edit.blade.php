@extends('layouts.app')

@section('title')
edit/atividade
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Atividade</div>

                <div class="panel-body">
            <form method = 'get' action = 'http://localhost:8000/atividade'>
                <button class = 'btn btn-danger'>Atividade Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/atividade/{{$atividade->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="form-group">
                    <label for="nome_da_atividade">nome_da_atividade</label>
                    <input id="nome_da_atividade" name = "nome_da_atividade" type="text" class="form-control" value="{{$atividade->nome_da_atividade}}">
                </div>


                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
          </div>
        </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  @endsection
