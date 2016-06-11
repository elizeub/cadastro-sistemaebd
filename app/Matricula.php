<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MatriculaController
 *
 * @author  The scaffold-interface created at 2016-06-09 03:35:24am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Matricula extends Model
{
    public $timestamps = false;

    protected $table = 'matriculas';

	
	public function sala()
	{
		return $this->belongsTo('App\Sala');
	}

	
	public function atividade()
	{
		return $this->belongsTo('App\Atividade');
	}

	}
