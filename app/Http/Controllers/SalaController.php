<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Sala;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class SalaController
 *
 * @author  The scaffold-interface created at 2016-06-09 03:24:42am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class SalaController extends Controller
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
        $salas = Sala::all();
        return view('sala.index',compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('sala.create'
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

        $sala = new Sala();

        
        $sala->nome_da_sala = $input['nome_da_sala'];

        
        
        $sala->save();

        return redirect('sala');
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
            return URL::to('sala/'.$id);
        }

        $sala = Sala::findOrfail($id);
        return view('sala.show',compact('sala'));
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
            return URL::to('sala/'. $id . '/edit');
        }

        
        $sala = Sala::findOrfail($id);
        return view('sala.edit',compact('sala'
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

        $sala = Sala::findOrfail($id);
    	
        $sala->nome_da_sala = $input['nome_da_sala'];
        
        
        $sala->save();

        return redirect('sala');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/sala/'. $id . '/delete/');

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
     	$sala = Sala::findOrfail($id);
     	$sala->delete();
        return URL::to('sala');
    }
}
