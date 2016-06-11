<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Atividade;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class AtividadeController
 *
 * @author  The scaffold-interface created at 2016-06-09 03:25:24am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AtividadeController extends Controller
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
        $atividades = Atividade::all();
        return view('atividade.index',compact('atividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('atividade.create'
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

        $atividade = new Atividade();

        
        $atividade->nome_da_atividade = $input['nome_da_atividade'];

        
        
        $atividade->save();

        return redirect('atividade');
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
            return URL::to('atividade/'.$id);
        }

        $atividade = Atividade::findOrfail($id);
        return view('atividade.show',compact('atividade'));
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
            return URL::to('atividade/'. $id . '/edit');
        }

        
        $atividade = Atividade::findOrfail($id);
        return view('atividade.edit',compact('atividade'
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

        $atividade = Atividade::findOrfail($id);
    	
        $atividade->nome_da_atividade = $input['nome_da_atividade'];
        
        
        $atividade->save();

        return redirect('atividade');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/atividade/'. $id . '/delete/');

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
     	$atividade = Atividade::findOrfail($id);
     	$atividade->delete();
        return URL::to('atividade');
    }
}
