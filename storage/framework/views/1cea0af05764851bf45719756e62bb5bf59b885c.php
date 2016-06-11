<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Chamada</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Chamada</h1>
            <form method = 'get' action = 'http://localhost:8000/chamada'>
                <button class = 'btn btn-danger'>Chamada Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/chamada/<?php echo e($chamada->id); ?>/update'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>

                <div class="form-group">
                    <label for="data_da_chamada">data_da_chamada</label>
                    <input id="data_da_chamada" name = "data_da_chamada" type="text" class="form-control" value="<?php echo e($chamada->data_da_chamada); ?>">
                </div>

                <div class="form-group">
                    <label>salas Select</label>
                    <select name = 'sala_id' class = "form-control">
                        <?php foreach($salas as $key1 => $value1): ?>
                        <option value="<?php echo e($key1); ?>"><?php echo e($value1); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>matriculas Select</label>
                    <select name = 'matricula_id' class = "form-control">
                        <?php foreach($matriculas as $key1 => $value1): ?>
                        <option value="<?php echo e($key1); ?>"><?php echo e($value1); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="presente">presente</label>
                    <input id="presente" name = "presente" type="text" class="form-control" value="<?php echo e($chamada->presente); ?>">
                </div>





                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
