namespace <?php echo e(config('amranidev.config.modelNameSpace')); ?>;

use Illuminate\Database\Eloquent\Model;

/**
 * Class <?php echo e($names->tableName()); ?>Controller
 *
 * @author  The scaffold-interface created at <?php echo e(date("Y-m-d h:i:sa")); ?>

 * @link  https://github.com/amranidev/scaffold-interface
 */
class <?php echo e($names->tableName()); ?> extends Model
{
    public $timestamps = false;

    protected $table = '<?php echo e($names->tableNames()); ?>';

	<?php foreach($foreignKeys as $key): ?>

	public function <?php echo e(lcfirst(str_singular($key))); ?>()
	{
		return $this->belongsTo('<?php echo e(config('amranidev.config.modelNameSpace')); ?>\<?php echo e(ucfirst(str_singular($key))); ?>');
	}

	<?php endforeach; ?>
}
