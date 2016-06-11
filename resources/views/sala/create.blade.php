@extends('layouts.app')

@section('title')
create/sala
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Sala</div>

                <div class="panel-body">
            <form method = 'get' action = 'http://localhost:8000/sala'>
                <button class = 'btn btn-danger'>Sala Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/sala'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="form-group">
                    <label for="nome_da_sala">nome_da_sala</label>
                    <input id="nome_da_sala" name = "nome_da_sala" type="text" class="form-control">
                </div>


                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
          </div>
      </div>
  </div>
</div>
</div>
@endsection
