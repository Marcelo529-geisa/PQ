<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFedeEstudiosAfirma extends Migration
{
    public function up()
    {
        Schema::create('fede_estudios_afirma', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('texto');
            $table->integer('estudios_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fede_estudios_afirma');
    }
}
