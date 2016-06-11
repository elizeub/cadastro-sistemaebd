<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Matricula;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Sala;


use App\Atividade;


/**
 * Class MatriculaController
 *
 * @author  The scaffold-interface created at 2016-06-09 03:35:24am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        $matriculas = Matricula::all();
        return view('matricula.index',compact('matriculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        $salas = Sala::all()->lists('nome_da_sala','id');
        
        $atividades = Atividade::all()->lists('nome_da_atividade','id');
        
        return view('matricula.create'
                ,compact(
                'salas'
        ,
                        'atividades'
                )
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

        $matricula = new Matricula();

        
        $matricula->nome = $input['nome'];

        
        $matricula->sexo = $input['sexo'];

        
        $matricula->data_nascimento = $input['data_nascimento'];

        
        $matricula->endereco = $input['endereco'];

        
        $matricula->bairro = $input['bairro'];

        
        $matricula->cidade = $input['cidade'];

        
        $matricula->telefone = $input['telefone'];

        
        
        $matricula->sala_id = $input['sala_id'];

        
        $matricula->atividade_id = $input['atividade_id'];

        
        $matricula->save();

        return redirect('matricula');
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
            return URL::to('matricula/'.$id);
        }

        $matricula = Matricula::findOrfail($id);
        return view('matricula.show',compact('matricula'));
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
            return URL::to('matricula/'. $id . '/edit');
        }

        
        $salas = Sala::all()->lists('nome_da_sala','id');

        
        $atividades = Atividade::all()->lists('nome_da_atividade','id');

        
        $matricula = Matricula::findOrfail($id);
        return view('matricula.edit',compact('matricula'
                ,
                'salas'
        ,
                        'atividades'
                        )
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

        $matricula = Matricula::findOrfail($id);
    	
        $matricula->nome = $input['nome'];
        
        $matricula->sexo = $input['sexo'];
        
        $matricula->data_nascimento = $input['data_nascimento'];
        
        $matricula->endereco = $input['endereco'];
        
        $matricula->bairro = $input['bairro'];
        
        $matricula->cidade = $input['cidade'];
        
        $matricula->telefone = $input['telefone'];
        
        
        $matricula->sala_id = $input['sala_id'];

        
        $matricula->atividade_id = $input['atividade_id'];

        
        $matricula->save();

        return redirect('matricula');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/matricula/'. $id . '/delete/');

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
     	$matricula = Matricula::findOrfail($id);
     	$matricula->delete();
        return URL::to('matricula');
    }
}
