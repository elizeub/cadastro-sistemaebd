<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show <?php echo e($names->tableName()); ?></title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show <?php echo e($names->tableName()); ?></h1>
            <form method = 'get' action = '<?php echo e($names->standardApi()); ?>'>
                <button class = 'btn blue'><?php echo e($names->tableName()); ?> Index</button>
            </form>
            <table class = 'highlight bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    <?php foreach($dataSystem->dataScaffold('v') as $value): ?>

                    <tr>
                        <td>
                            <b><i><?php echo e($value); ?> : </i></b>
                        </td>
                        <td><?php echo e($names->open()); ?>$<?php echo e($names->tableNameSingle()); ?>-><?php echo e($value); ?><?php echo e($names->close()); ?></td>
                    </tr>
                    <?php endforeach; ?>


                        <?php if($dataSystem->getRelationAttributes() != null): ?>
                        <?php foreach($dataSystem->getRelationAttributes() as $key=>$value): ?>

                        <?php foreach($value as $key1 => $value1): ?>

                        <tr>
                        <td>
                            <b><i><?php echo e($value1); ?> : </i><b>
                        </td>
                        <td><?php echo e($names->open()); ?>$<?php echo e($names->tableNameSingle()); ?>-><?php echo e(str_singular($key)); ?>-><?php echo e($value1); ?><?php echo e($names->close()); ?></td>
                        </tr>
                        <?php endforeach; ?>

                        <?php endforeach; ?>

                        <?php endif; ?>

                </tbody>
            </table>
        </div>
    </body>
    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</html>
