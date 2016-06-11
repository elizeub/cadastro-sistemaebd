<?php $__env->startSection('title'); ?>
create/atividade
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Matrícula</div>

                <div class="panel-body">

            <form method = 'get' action = 'http://localhost:8000/atividade'>
                <button class = 'btn btn-danger'>Atividade Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/atividade'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>

                <div class="form-group">
                    <label for="nome_da_atividade">nome_da_atividade</label>
                    <input id="nome_da_atividade" name = "nome_da_atividade" type="text" class="form-control">
                </div>


                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
          </div>
      </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>