<?php namespace Fede\Portada\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFedePortada extends Migration
{
    public function up()
    {
        Schema::create('fede_portada_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titulo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fede_portada_');
    }
}
