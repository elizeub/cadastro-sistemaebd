<?php $__env->startSection('title'); ?>
edit/sala
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Sala</div>

                <div class="panel-body">
            <form method = 'get' action = 'http://localhost:8000/sala'>
                <button class = 'btn btn-danger'>Sala Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/sala/<?php echo e($sala->id); ?>/update'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>

                <div class="form-group">
                    <label for="nome_da_sala">nome_da_sala</label>
                    <input id="nome_da_sala" name = "nome_da_sala" type="text" class="form-control" value="<?php echo e($sala->nome_da_sala); ?>">
                </div>


                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
          </div>
      </div>
  </div>
  </div>
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>