<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index Chamada</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Chamada Index</h1>
            <form class = 'col s3' method = 'get' action = 'http://localhost:8000/chamada/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Chamada</button>
            </form>
            <br>
            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <li><a href="http://localhost:8000/sala">Sala</a></li>
                    
                    <li><a href="http://localhost:8000/matricula">Matricula</a></li>
                    
                </ul>
            </div>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>presente</th>
                    
                    <th>data_da_chamada</th>
                    
                    
                    
                    
                    <th>nome_da_sala</th>
                    
                    
                    
                    <th>nome_aluno</th>
                    
                    <th>sexo</th>
                    
                    <th>data_nascimento</th>
                    
                    <th>telefone</th>
                    
                    <th>endereco</th>
                    
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    <?php foreach($chamadas as $value): ?>
                    <tr>
                        
                        <td><?php echo e($value->presente); ?></td>
                        
                        <td><?php echo e($value->data_da_chamada); ?></td>
                        
                        
                        
                                                <td><?php echo e($value->sala->nome_da_sala); ?></td>

                        
                        
                                                <td><?php echo e($value->matricula->nome_aluno); ?></td>

                                                <td><?php echo e($value->matricula->sexo); ?></td>

                                                <td><?php echo e($value->matricula->data_nascimento); ?></td>

                                                <td><?php echo e($value->matricula->telefone); ?></td>

                                                <td><?php echo e($value->matricula->endereco); ?></td>

                        
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/chamada/<?php echo e($value->id); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/chamada/<?php echo e($value->id); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/chamada/<?php echo e($value->id); ?>'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "<?php echo e(URL::to('/')); ?>"</script>
<script src = "<?php echo e(URL::asset('js/AjaxisBootstrap.js')); ?>"></script>
<script src = "<?php echo e(URL::asset('js/scaffold-interface-js/customA.js')); ?>"></script>
</html>
