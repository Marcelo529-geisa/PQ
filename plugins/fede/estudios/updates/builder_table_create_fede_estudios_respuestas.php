<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFedeEstudiosRespuestas extends Migration
{
    public function up()
    {
        Schema::create('fede_estudios_respuestas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->integer('estudios_id');
            $table->text('respuestas');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fede_estudios_respuestas');
    }
}
