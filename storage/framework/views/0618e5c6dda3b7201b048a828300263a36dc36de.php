<?php $__env->startSection('title'); ?>
show/matricula
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Show Matricula</div>

                <div class="panel-body">
            <form method = 'get' action = 'http://localhost:8000/matricula'>
                <button class = 'btn btn-primary'>Matricula Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>


                    <tr>
                        <td>
                            <b><i>nome : </i></b>
                        </td>
                        <td><?php echo e($matricula->nome); ?></td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>sexo : </i></b>
                        </td>
                        <td><?php echo e($matricula->sexo); ?></td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>data_nascimento : </i></b>
                        </td>
                        <td><?php echo e($matricula->data_nascimento); ?></td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>endereco : </i></b>
                        </td>
                        <td><?php echo e($matricula->endereco); ?></td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>bairro : </i></b>
                        </td>
                        <td><?php echo e($matricula->bairro); ?></td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>cidade : </i></b>
                        </td>
                        <td><?php echo e($matricula->cidade); ?></td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>telefone : </i></b>
                        </td>
                        <td><?php echo e($matricula->telefone); ?></td>
                    </tr>




                        <tr>
                        <td>
                            <b><i>nome_da_sala : </i><b>
                        </td>
                        <td><?php echo e($matricula->sala->nome_da_sala); ?></td>
                        </tr>



                        <tr>
                        <td>
                            <b><i>nome_da_atividade : </i><b>
                        </td>
                        <td><?php echo e($matricula->atividade->nome_da_atividade); ?></td>
                        </tr>



                </tbody>
            </table>
          </div>
      </div>
  </div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>