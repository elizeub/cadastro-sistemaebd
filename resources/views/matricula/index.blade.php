@extends('layouts.app')

@section('title')
matricula
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Matrícula Index</div>

                <div class="panel-body">
            <form class = 'col s3' method = 'get' action = 'http://localhost:8000/matricula/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Matricula</button>
            </form>
            <br>

            <table class = "table table-striped table-bordered">
                <thead>

                    <th>nome</th>
                    <th>nome_da_sala</th>


                    <th>nome_da_atividade</th>



                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($matriculas as $value)
                    <tr>

                        <td>{{$value->nome}}</td>





                                                <td>{{$value->sala->nome_da_sala}}</td>



                                                <td>{{$value->atividade->nome_da_atividade}}</td>




                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/matricula/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/matricula/{{$value->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/matricula/{{$value->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
  </div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class = 'AjaxisModal'>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script> var baseURL = "{{URL::to('/')}}"</script>
  <script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
  <script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
  @endsection
