<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Salas
 *
 * @author  The scaffold-interface created at 2016-06-09 03:24:42am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Salas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('salas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nome_da_sala');
        
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
        Schema::drop('salas');
    }
}
