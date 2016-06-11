<?php $__env->startSection('title'); ?>
create/matricula
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Matricula</div>
                  <div class="panel-body">
            <form method = 'get' action = 'http://localhost:8000/matricula'>
                <button class = 'btn btn-danger'>Matricula Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/matricula'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>

                <div class="form-group">
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="sexo">sexo</label>
                    <input id="sexo" name = "sexo" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="data_nascimento">data_nascimento</label>
                    <input id="data_nascimento" name = "data_nascimento" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="endereco">endereco</label>
                    <input id="endereco" name = "endereco" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="bairro">bairro</label>
                    <input id="bairro" name = "bairro" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="cidade">cidade</label>
                    <input id="cidade" name = "cidade" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="telefone">telefone</label>
                    <input id="telefone" name = "telefone" type="text" class="form-control">
                </div>


                <div class="form-group">
                    <label>salas Select</label>
                    <select name = 'sala_id' class = 'form-control'>
                        <?php foreach($salas as $key1 => $value1): ?>
                        <option value="<?php echo e($key1); ?>"><?php echo e($value1); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>atividades Select</label>
                    <select name = 'atividade_id' class = 'form-control'>
                        <?php foreach($atividades as $key1 => $value1): ?>
                        <option value="<?php echo e($key1); ?>"><?php echo e($value1); ?></option>
                        <?php endforeach; ?>
                    </select>
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