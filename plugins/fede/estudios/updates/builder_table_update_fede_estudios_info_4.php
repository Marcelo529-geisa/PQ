<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosInfo4 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_info', function($table)
        {
            $table->string('etiqueta')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_info', function($table)
        {
            $table->dropColumn('etiqueta');
        });
    }
}
