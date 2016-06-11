use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class <?php echo e(ucfirst($names->tableNames())); ?>

 *
 * @author  The scaffold-interface created at <?php echo e(date("Y-m-d h:i:sa")); ?>

 * @link  https://github.com/amranidev/scaffold-interface
 */
class <?php echo e(studly_case(ucfirst($names->tableNames()))); ?> extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('<?php echo e($names->tableNames()); ?>',function (Blueprint $table){

        $table->increments('id');<?php $i = 0;?>

        <?php foreach($dataSystem->dataScaffold('v') as $attr): ?>

        $table-><?php echo e($dataSystem->dataScaffold('migration')[$i]); ?>('<?php echo e($attr); ?>');<?php $i = $i + 1;?>

        <?php endforeach; ?>

        /**
         * Foreignkeys section
         */
        <?php foreach($dataSystem->getForeignKeys() as $key): ?>

        $table->integer('<?php echo e(lcfirst(str_singular($key))); ?>_id')->unsigned();
        $table->foreign('<?php echo e(lcfirst(str_singular($key))); ?>_id')->references('id')->on('<?php echo e($key); ?>')->onDelete('cascade');

        <?php endforeach; ?>

        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('<?php echo e($names->tableNames()); ?>');
    }
}
