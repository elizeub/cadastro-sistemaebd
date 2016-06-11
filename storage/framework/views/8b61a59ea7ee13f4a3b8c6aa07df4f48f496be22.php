//<?php echo e($names->tableNameSingle()); ?> Resources
/********************* <?php echo e($names->tableNameSingle()); ?> ***********************************************/
Route::resource('<?php echo e($names->tableNameSingle()); ?>','<?php if(config('amranidev.config.controllerNameSpace')): ?>\<?php echo e(config('amranidev.config.controllerNameSpace')); ?>\<?php endif; ?><?php echo e($names->tableName()); ?>Controller');
Route::post('<?php echo e($names->tableNameSingle()); ?>/{id}/update','<?php if(config('amranidev.config.controllerNameSpace')): ?>\<?php echo e(config('amranidev.config.controllerNameSpace')); ?>\<?php endif; ?><?php echo e($names->tableName()); ?>Controller@update');
Route::get('<?php echo e($names->tableNameSingle()); ?>/{id}/delete','<?php if(config('amranidev.config.controllerNameSpace')): ?>\<?php echo e(config('amranidev.config.controllerNameSpace')); ?>\<?php endif; ?><?php echo e($names->tableName()); ?>Controller@destroy');
Route::get('<?php echo e($names->tableNameSingle()); ?>/{id}/deleteMsg','<?php if(config('amranidev.config.controllerNameSpace')): ?>\<?php echo e(config('amranidev.config.controllerNameSpace')); ?>\<?php endif; ?><?php echo e($names->tableName()); ?>Controller@DeleteMsg');
/********************* <?php echo e($names->tableNameSingle()); ?> ***********************************************/

