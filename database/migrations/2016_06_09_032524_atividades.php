<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Atividades
 *
 * @author  The scaffold-interface created at 2016-06-09 03:25:24am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Atividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('atividades',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nome_da_atividade');
        
        /**
         * Foreignkeys section
         */
        
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
        Schema::drop('atividades');
    }
}
