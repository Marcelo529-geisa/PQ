<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFedeEstudiosUsers extends Migration
{
    public function up()
    {
        Schema::create('fede_estudios_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('estudio_id');
            $table->integer('user_id');
            $table->primary(['estudio_id','user_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fede_estudios_users');
    }
}
