<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index <?php echo e($names->tableName()); ?></title>
    </head>
    <body>
        <div class = 'container'>
            <h1><?php echo e($names->tableName()); ?> Index</h1>
            <form class = 'col s3' method = 'get' action = '<?php echo e($names->standardApi()); ?>/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New <?php echo e($names->tableName()); ?></button>
            </form>
            <br>
            <?php if($dataSystem->getRelationAttributes() != null): ?>

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <?php foreach($dataSystem->getRelationAttributes() as $key => $value): ?>

                    <li><a href="<?php echo e(URL::to('/')); ?>/<?php echo e(lcfirst(str_singular($key))); ?>"><?php echo e(ucfirst(str_singular($key))); ?></a></li>
                    <?php endforeach; ?>

                </ul>
            </div>
            <?php endif; ?>

            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    <?php foreach($dataSystem->dataScaffold('v') as $value): ?>

                    <th><?php echo e($value); ?></th>
                    <?php endforeach; ?>

                    <?php if($dataSystem->getRelationAttributes() != null): ?>

                    <?php foreach($dataSystem->getRelationAttributes() as $key => $value): ?>

                    <?php foreach($value as $key1 => $value1): ?>

                    <th><?php echo e($value1); ?></th>
                    <?php endforeach; ?>

                    <?php endforeach; ?>

                    <?php endif; ?>

                    <th>actions</th>
                </thead>
                <tbody>
                    <?php echo e($names->foreachh()); ?>

                    <tr>
                        <?php foreach($dataSystem->dataScaffold('v') as $value): ?>

                        <td><?php echo e($names->open()); ?>$value-><?php echo e($value); ?><?php echo e($names->close()); ?></td>
                        <?php endforeach; ?>

                        <?php if($dataSystem->getRelationAttributes() != null): ?>

                        <?php foreach($dataSystem->getRelationAttributes() as $key=>$value): ?>

                        <?php foreach($value as $key1 => $value1): ?>
                        <td><?php echo e($names->open()); ?>$value-><?php echo e(str_singular($key)); ?>-><?php echo e($value1); ?><?php echo e($names->close()); ?></td>

                        <?php endforeach; ?>

                        <?php endforeach; ?>

                        <?php endif; ?>

                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/<?php echo e($names->tableNameSingle()); ?>/<?php echo e($names->open()); ?>$value->id<?php echo e($names->close()); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/<?php echo e($names->tableNameSingle()); ?>/<?php echo e($names->open()); ?>$value->id<?php echo e($names->close()); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/<?php echo e($names->tableNameSingle()); ?>/<?php echo e($names->open()); ?>$value->id<?php echo e($names->close()); ?>'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    <?php echo e($names->endforeachh()); ?>

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
<script> var baseURL = "<?php echo e($names->open()); ?>URL::to('/')<?php echo e($names->close()); ?>"</script>
<script src = "<?php echo e($names->open()); ?> URL::asset('js/AjaxisBootstrap.js')<?php echo e($names->close()); ?>"></script>
<script src = "<?php echo e($names->open()); ?> URL::asset('js/scaffold-interface-js/customA.js')<?php echo e($names->close()); ?>"></script>
</html>
