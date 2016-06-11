<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create <?php echo e($names->tableName()); ?></title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create <?php echo e($names->tableName()); ?></h1>
            <form method = 'get' action = '<?php echo e($names->standardApi()); ?>'>
                <button class = 'btn btn-danger'><?php echo e($names->tableName()); ?> Index</button>
            </form>
            <br>
            <form method = 'POST' action = '<?php echo e($names->standardApi()); ?>'>
                <input type = 'hidden' name = '_token' value = '<?php echo e($names->open()); ?>Session::token()<?php echo e($names->close()); ?>'>
                <?php foreach($dataSystem->dataScaffold('v') as $value): ?>

                <div class="form-group">
                    <label for="<?php echo e($value); ?>"><?php echo e($value); ?></label>
                    <input id="<?php echo e($value); ?>" name = "<?php echo e($value); ?>" type="text" class="form-control">
                </div>
                <?php endforeach; ?>

                <?php foreach($dataSystem->getForeignKeys() as $key): ?>

                <div class="form-group">
                    <label><?php echo e($key); ?> Select</label>
                    <select name = '<?php echo e(lcfirst(str_singular($key))); ?>_id' class = 'form-control'>
                        <?php echo e($names->blade()); ?>foreach($<?php echo e(str_plural($key)); ?> as $key1 => $value1)
                        <option value="{{$key1}}">{{$value1}}</option>
                        <?php echo e($names->blade()); ?>endforeach
                    </select>
                </div>
                <?php endforeach; ?>

                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
