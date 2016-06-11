namespace <?php echo e(config('amranidev.config.controllerNameSpace')); ?>;

use Request;
use App\Http\Controllers\Controller;
use <?php echo e(config('amranidev.config.modelNameSpace')); ?>\<?php echo e($names->tableName()); ?>;
use Amranidev\Ajaxis\Ajaxis;
use URL;
<?php foreach($dataSystem->getForeignKeys() as $key): ?>

use <?php echo e(config('amranidev.config.modelNameSpace')); ?>\<?php echo e(ucfirst(str_singular($key))); ?>;

<?php endforeach; ?>

/**
 * Class <?php echo e($names->tableName()); ?>Controller
 *
 * @author  The scaffold-interface created at <?php echo e(date("Y-m-d h:i:sa")); ?>

 * @link  https://github.com/amranidev/scaffold-interface
 */
class <?php echo e($names->tableName()); ?>Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $<?php echo e($names->tableNames()); ?> = <?php echo e($names->tableName()); ?>::all();
        return view('<?php if(config('amranidev.config.loadViews')): ?><?php echo e(config('amranidev.config.loadViews')); ?>::<?php endif; ?><?php echo e($names->TableNameSingle()); ?>.index',compact('<?php echo e($names->TableNames()); ?>'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        <?php foreach($dataSystem->getForeignKeys() as $key => $value): ?>

        $<?php echo e(str_plural($value)); ?> = <?php echo e(ucfirst(str_singular($value))); ?>::all()->lists('<?php echo e($dataSystem->getOnData()[$key]); ?>','id');
        <?php endforeach; ?>

        return view('<?php if(config('amranidev.config.loadViews')): ?><?php echo e(config('amranidev.config.loadViews')); ?>::<?php endif; ?><?php echo e($names->TableNameSingle()); ?>.create'
        <?php if($dataSystem->getForeignKeys() != null): ?>
        ,compact(
        <?php foreach($dataSystem->getForeignKeys() as $key => $value): ?>
        '<?php echo e(str_plural($value)); ?>'
        <?php if($value != last($dataSystem->getForeignKeys())): ?>,
        <?php endif; ?>
        <?php endforeach; ?>)
        <?php endif; ?>
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::except('_token');

        $<?php echo e($names->tableNameSingle()); ?> = new <?php echo e($names->tableName()); ?>();

        <?php foreach($dataSystem->dataScaffold('v') as $value): ?>

        $<?php echo e($names->tableNameSingle()); ?>-><?php echo e($value); ?> = $input['<?php echo e($value); ?>'];

        <?php endforeach; ?>

        <?php foreach($dataSystem->getForeignKeys() as $key): ?>

        $<?php echo e($names->tableNameSingle()); ?>-><?php echo e(lcfirst(str_singular($key))); ?>_id = $input['<?php echo e(lcfirst(str_singular($key))); ?>_id'];

        <?php endforeach; ?>

        $<?php echo e($names->tableNameSingle()); ?>->save();

        return redirect('<?php echo e($names->tableNameSingle()); ?>');
    }

    /**
     * Display the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Request::ajax())
        {
            return URL::to('<?php echo e($names->tableNameSingle()); ?>/'.$id);
        }

        $<?php echo e($names->tableNameSingle()); ?> = <?php echo e($names->tableName()); ?>::findOrfail($id);
        return view('<?php if(config('amranidev.config.loadViews')): ?><?php echo e(config('amranidev.config.loadViews')); ?>::<?php endif; ?><?php echo e($names->TableNameSingle()); ?>.show',compact('<?php echo e($names->TableNameSingle()); ?>'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Request::ajax())
        {
            return URL::to('<?php echo e($names->tableNameSingle()); ?>/'. $id . '/edit');
        }

        <?php foreach($dataSystem->getForeignKeys() as $key => $value): ?>

        $<?php echo e(str_plural($value)); ?> = <?php echo e(ucfirst(str_singular($value))); ?>::all()->lists('<?php echo e($dataSystem->getOnData()[$key]); ?>','id');

        <?php endforeach; ?>

        $<?php echo e($names->tableNameSingle()); ?> = <?php echo e($names->tableName()); ?>::findOrfail($id);
        return view('<?php if(config('amranidev.config.loadViews')): ?><?php echo e(config('amranidev.config.loadViews')); ?>::<?php endif; ?><?php echo e($names->TableNameSingle()); ?>.edit',compact('<?php echo e($names->TableNameSingle()); ?>'
        <?php if($dataSystem->getForeignKeys() != null): ?>
        ,
        <?php foreach($dataSystem->getForeignKeys() as $key => $value): ?>
        '<?php echo e(str_plural($value)); ?>'
        <?php if($value != last($dataSystem->getForeignKeys())): ?>,
        <?php endif; ?>
        <?php endforeach; ?>
        )
        <?php else: ?>
        )
        <?php endif; ?>
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id)
    {
        $input = Request::except('_token');

        $<?php echo e($names->tableNameSingle()); ?> = <?php echo e($names->tableName()); ?>::findOrfail($id);
    	<?php foreach($dataSystem->dataScaffold('v') as $value): ?>

        $<?php echo e($names->tableNameSingle()); ?>-><?php echo e($value); ?> = $input['<?php echo e($value); ?>'];
        <?php endforeach; ?>

        <?php foreach($dataSystem->getForeignKeys() as $key): ?>

        $<?php echo e($names->tableNameSingle()); ?>-><?php echo e(lcfirst(str_singular($key))); ?>_id = $input['<?php echo e(lcfirst(str_singular($key))); ?>_id'];

        <?php endforeach; ?>

        $<?php echo e($names->tableNameSingle()); ?>->save();

        return redirect('<?php echo e($names->tableNameSingle()); ?>');
    }

    /**
     * Delete confirmation message by Ajaxis
     *
     * @link  https://github.com/amranidev/ajaxis
     *
     * @return  String
     */
    public function DeleteMsg($id)
    {
        $msg = Ajaxis::<?php echo e($names->getParse()); ?>Deleting('Warning!!','Would you like to remove This?','/<?php echo e($names->TableNameSingle()); ?>/'. $id . '/delete/');

        if(Request::ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$<?php echo e($names->tableNameSingle()); ?> = <?php echo e($names->tableName()); ?>::findOrfail($id);
     	$<?php echo e($names->tableNameSingle()); ?>->delete();
        return URL::to('<?php echo e($names->tableNameSingle()); ?>');
    }
}
