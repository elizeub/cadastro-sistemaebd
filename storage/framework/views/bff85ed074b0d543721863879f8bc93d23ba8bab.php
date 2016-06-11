<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit <?php echo e($names->tableName()); ?></title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit <?php echo e($names->tableName()); ?></h1>
            <form method = 'get' action = '<?php echo e($names->standardApi()); ?>'>
                <button class = 'btn blue'><?php echo e($names->tableName()); ?> Index</button>
            </form>
            <br>
            <form method = 'POST' action = '<?php echo e($names->standardApi()); ?>/<?php echo e($names->open()); ?>$<?php echo e($names->tableNameSingle()); ?>->id<?php echo e($names->close()); ?>/update'>
                <input type = 'hidden' name = '_token' value = '<?php echo e($names->open()); ?>Session::token()<?php echo e($names->close()); ?>'>
                <?php foreach($dataSystem->dataScaffold('v') as $value): ?>

                <div class="input-field col s6">
                    <input id="<?php echo e($value); ?>" name = "<?php echo e($value); ?>" type="text" class="validate" value="<?php echo e($names->open()); ?>$<?php echo e($names->tableNameSingle()); ?>-><?php echo e($value); ?><?php echo e($names->close()); ?>">
                    <label for="<?php echo e($value); ?>"><?php echo e($value); ?></label>
                </div>
                <?php endforeach; ?>
                <?php foreach($dataSystem->getForeignKeys() as $key): ?>

                <div class="input-field col s12">
                    <select name = '<?php echo e(lcfirst(str_singular($key))); ?>_id'>
                        <?php echo e($names->blade()); ?>foreach($<?php echo e(str_plural($key)); ?> as $key1 => $value1)
                        <option value="{{$key1}}">{{$value1}}</option>
                        <?php echo e($names->blade()); ?>endforeach
                    </select>
                    <label><?php echo e($key); ?> Select</label>
                </div>
                <?php endforeach; ?>

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
