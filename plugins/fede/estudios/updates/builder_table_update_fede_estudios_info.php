<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosInfo extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_info', function($table)
        {
            $table->integer('estudio_id');
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_info', function($table)
        {
            $table->dropColumn('estudio_id');
        });
    }
}
