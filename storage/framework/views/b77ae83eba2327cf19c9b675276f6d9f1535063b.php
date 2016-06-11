<?php $__env->startSection('title'); ?>
Sala
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Index Sala</div>

                <div class="panel-body">
            <form class = 'col s3' method = 'get' action = 'http://localhost:8000/sala/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Sala</button>
            </form>
            <br>

            <br>
            <table class = "table table-striped table-bordered">
                <thead>

                    <th>nome_da_sala</th>


                    <th>actions</th>
                </thead>
                <tbody>
                    <?php foreach($salas as $value): ?>
                    <tr>

                        <td><?php echo e($value->nome_da_sala); ?></td>


                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/sala/<?php echo e($value->id); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/sala/<?php echo e($value->id); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/sala/<?php echo e($value->id); ?>'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
          </div>
      </div>
  </div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class = 'AjaxisModal'>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script> var baseURL = "<?php echo e(URL::to('/')); ?>"</script>
  <script src = "<?php echo e(URL::asset('js/AjaxisBootstrap.js')); ?>"></script>
  <script src = "<?php echo e(URL::asset('js/scaffold-interface-js/customA.js')); ?>"></script>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>