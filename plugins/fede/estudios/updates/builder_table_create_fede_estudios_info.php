<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFedeEstudiosInfo extends Migration
{
    public function up()
    {
        Schema::create('fede_estudios_info', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titulo');
            $table->text('cuerpo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fede_estudios_info');
    }
}
