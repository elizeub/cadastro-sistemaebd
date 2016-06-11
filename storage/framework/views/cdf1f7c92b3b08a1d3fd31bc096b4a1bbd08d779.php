<?php $__env->startSection('title'); ?>
home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sistema de Gerenciamento e Cadastro da Escola Bíblica Dominical</div>

                <div class="panel-body">
                    <li><a href="<?php echo e(url('/sala')); ?>">Salas</a></li>
                    <li><a href="<?php echo e(url('/atividade')); ?>">Atividades</a></li>
                    <li><a href="<?php echo e(url('/matricula')); ?>">Matriculas</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>