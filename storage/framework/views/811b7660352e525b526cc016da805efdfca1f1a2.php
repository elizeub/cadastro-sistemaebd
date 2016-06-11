<?php $__env->startSection('title', 'Atividades Registradas'); ?>

<?php $__env->startSection('sidebar'); ?>
    @parent
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Atividades Registradas'); ?>

<?php $__env->startSection('content'); ?>
            <form class = 'col s3' method = 'get' action = 'http://localhost:8000/atividade/create'>
                <button class = 'btn red' type = 'submit'>Create New Atividade</button>
            </form>
                        </div>
            <table>
                <thead>

                    <th>atividade</th>


                    <th>actions</th>
                </thead>
                <tbody>
                    <?php foreach($atividades as $value): ?>

                    <tr>

                        <td><?php echo e($value->atividade); ?></td>


                        <td>
                            <div class = 'row'>
                                <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/atividade/<?php echo e($value->id); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/atividade/<?php echo e($value->id); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn-floating orange' data-link = '/atividade/<?php echo e($value->id); ?>'><i class = 'material-icons'>info</i></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.modelo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>