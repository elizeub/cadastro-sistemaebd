<?php $__env->startSection('title'); ?>
welcome
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem vindo ao Sistema EBD</div>

                <div class="panel-body">
                    <p>Bem vindo!</p>
                    <p>Esta é a página inicial do sistema de cadastros
                    da Escola Bíblica Dominical.</p>
                    <p>Para usar todas as funcionalidades
                    você precisa estar logado.</p>
                    <br>
                    <hr>
                    <center>
                    <b><?php echo $__env->make('includes.versiculos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></b>
                  </center>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>