<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index Sala</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Sala Index</h1>
            <div class="row">
            <form class = 'col s3' method = 'get' action = 'http://localhost:8000/sala/create'>
                <button class = 'btn red' type = 'submit'>Create New Sala</button>
            </form>
                        </div>
            <table>
                <thead>
                    
                    <th>sala</th>
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    <?php foreach($salas as $value): ?>

                    <tr>
                        
                        <td><?php echo e($value->sala); ?></td>
                        
                        
                        <td>
                            <div class = 'row'>
                                <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/sala/<?php echo e($value->id); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/sala/<?php echo e($value->id); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn-floating orange' data-link = '/sala/<?php echo e($value->id); ?>'><i class = 'material-icons'>info</i></a>
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
