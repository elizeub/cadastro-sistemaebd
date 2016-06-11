<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Matricula</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Matricula</h1>
            <form method = 'get' action = 'http://localhost:8000/matricula'>
                <button class = 'btn blue'>Matricula Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/matricula/<?php echo e($matricula->id); ?>/update'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>
                
                <div class="input-field col s6">
                    <input id="nome" name = "nome" type="text" class="validate" value="<?php echo e($matricula->nome); ?>">
                    <label for="nome">nome</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="sexo" name = "sexo" type="text" class="validate" value="<?php echo e($matricula->sexo); ?>">
                    <label for="sexo">sexo</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="dataNascimento" name = "dataNascimento" type="text" class="validate" value="<?php echo e($matricula->dataNascimento); ?>">
                    <label for="dataNascimento">dataNascimento</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="telefone" name = "telefone" type="text" class="validate" value="<?php echo e($matricula->telefone); ?>">
                    <label for="telefone">telefone</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="endereco" name = "endereco" type="text" class="validate" value="<?php echo e($matricula->endereco); ?>">
                    <label for="endereco">endereco</label>
                </div>
                                
                <div class="input-field col s12">
                    <select name = 'sala_id'>
                        <?php foreach($salas as $key1 => $value1): ?>
                        <option value="<?php echo e($key1); ?>"><?php echo e($value1); ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>salas Select</label>
                </div>
                
                <div class="input-field col s12">
                    <select name = 'atividade_id'>
                        <?php foreach($atividades as $key1 => $value1): ?>
                        <option value="<?php echo e($key1); ?>"><?php echo e($value1); ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>atividades Select</label>
                </div>
                
                <button class = 'btn red' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script>
    $('select').material_select();
    </script>
</html>
