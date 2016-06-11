<?php $__env->startSection('title', 'Criar Atividades'); ?>

<?php $__env->startSection('sidebar'); ?>
    @parent
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Criar Atividades'); ?>

<?php $__env->startSection('content'); ?>
            <form method = 'get' action = 'http://localhost:8000/atividade'>
                <button class = 'btn blue'>Atividade Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/atividade'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>

                <div class="input-field col s6">
                    <input id="atividade" name = "atividade" type="text" class="validate">
                    <label for="atividade">atividade</label>
                </div>


                <button class = 'btn red' type ='submit'>Create</button>
            </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.modelo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>