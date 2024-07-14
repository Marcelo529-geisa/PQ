<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFedeEstudios extends Migration
{
    public function up()
    {
        Schema::create('fede_estudios_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fede_estudios_');
    }
}
