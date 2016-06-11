<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Matriculas
 *
 * @author  The scaffold-interface created at 2016-06-09 03:35:24am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Matriculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('matriculas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nome');
        
        $table->String('sexo');
        
        $table->date('data_nascimento');
        
        $table->longText('endereco');
        
        $table->String('bairro');
        
        $table->String('cidade');
        
        $table->String('telefone');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('sala_id')->unsigned();
        $table->foreign('sala_id')->references('id')->on('salas')->onDelete('cascade');

        
        $table->integer('atividade_id')->unsigned();
        $table->foreign('atividade_id')->references('id')->on('atividades')->onDelete('cascade');

        
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
        Schema::drop('matriculas');
    }
}
