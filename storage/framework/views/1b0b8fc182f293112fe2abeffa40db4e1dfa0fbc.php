<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index <?php echo e($names->tableName()); ?></title>
    </head>
    <body>
        <div class = 'container'>
            <h1><?php echo e($names->tableName()); ?> Index</h1>
            <div class="row">
            <form class = 'col s3' method = 'get' action = '<?php echo e($names->standardApi()); ?>/create'>
                <button class = 'btn red' type = 'submit'>Create New <?php echo e($names->tableName()); ?></button>
            </form>
            <?php if($dataSystem->getRelationAttributes() != null): ?>

                <ul id="dropdown" class="dropdown-content">
            <?php foreach($dataSystem->getRelationAttributes() as $key => $value): ?>

                    <li><a href="<?php echo e(URL::to('/')); ?>/<?php echo e(lcfirst(str_singular($key))); ?>"><?php echo e(ucfirst(str_singular($key))); ?></a></li>
            <?php endforeach; ?>

                </ul>
                <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
            <?php endif; ?>
            </div>
            <table>
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
                            <div class = 'row'>
                                <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/<?php echo e($names->tableNameSingle()); ?>/<?php echo e($names->open()); ?>$value->id<?php echo e($names->close()); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/<?php echo e($names->tableNameSingle()); ?>/<?php echo e($names->open()); ?>$value->id<?php echo e($names->close()); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn-floating orange' data-link = '/<?php echo e($names->tableNameSingle()); ?>/<?php echo e($names->open()); ?>$value->id<?php echo e($names->close()); ?>'><i class = 'material-icons'>info</i></a>
                            </div>
                        </td>
                    </tr>
                    <?php echo e($names->endforeachh()); ?>

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
    <script> var baseURL = "<?php echo e($names->open()); ?>URL::to('/')<?php echo e($names->close()); ?>"</script>
    <script src = "<?php echo e($names->open()); ?> URL::asset('js/AjaxisMaterialize.js')<?php echo e($names->close()); ?>"></script>
    <script src = "<?php echo e($names->open()); ?> URL::asset('js/scaffold-interface-js/customA.js')<?php echo e($names->close()); ?>"></script>
</html>
