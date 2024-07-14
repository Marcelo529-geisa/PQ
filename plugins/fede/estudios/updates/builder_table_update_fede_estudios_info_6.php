<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosInfo6 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_info', function($table)
        {
            $table->text('cuerpo')->default('null')->change();
            $table->string('etiqueta', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_info', function($table)
        {
            $table->text('cuerpo')->default('NULL')->change();
            $table->string('etiqueta', 191)->default('\'null\'')->change();
        });
    }
}
