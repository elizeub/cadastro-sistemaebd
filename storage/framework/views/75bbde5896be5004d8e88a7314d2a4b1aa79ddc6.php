<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index Matricula</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Matricula Index</h1>
            <div class="row">
            <form class = 'col s3' method = 'get' action = 'http://localhost:8000/matricula/create'>
                <button class = 'btn red' type = 'submit'>Create New Matricula</button>
            </form>
            
                <ul id="dropdown" class="dropdown-content">
            
                    <li><a href="http://localhost:8000/sala">Sala</a></li>
            
                    <li><a href="http://localhost:8000/atividade">Atividade</a></li>
            
                </ul>
                <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        </div>
            <table>
                <thead>
                    
                    <th>nome</th>
                    
                    <th>sexo</th>
                    
                    <th>dataNascimento</th>
                    
                    <th>telefone</th>
                    
                    <th>endereco</th>
                    
                    
                    
                    
                    <th>sala</th>
                    
                    
                    
                    <th>atividade</th>
                    
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    <?php foreach($matriculas as $value): ?>

                    <tr>
                        
                        <td><?php echo e($value->nome); ?></td>
                        
                        <td><?php echo e($value->sexo); ?></td>
                        
                        <td><?php echo e($value->dataNascimento); ?></td>
                        
                        <td><?php echo e($value->telefone); ?></td>
                        
                        <td><?php echo e($value->endereco); ?></td>
                        
                        
                        
                        
                        <td><?php echo e($value->sala->sala); ?></td>
                        
                        
                        
                        <td><?php echo e($value->atividade->atividade); ?></td>
                        
                        
                        
                        <td>
                            <div class = 'row'>
                                <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/matricula/<?php echo e($value->id); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/matricula/<?php echo e($value->id); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn-floating orange' data-link = '/matricula/<?php echo e($value->id); ?>'><i class = 'material-icons'>info</i></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div id="modal1" class="modal">
            <div class = "row AjaxisModal">
            </div>
        </div>
    </body>
    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script> var baseURL = "<?php echo e(URL::to('/')); ?>"</script>
    <script src = "<?php echo e(URL::asset('js/AjaxisMaterialize.js')); ?>"></script>
    <script src = "<?php echo e(URL::asset('js/scaffold-interface-js/customA.js')); ?>"></script>
</html>
