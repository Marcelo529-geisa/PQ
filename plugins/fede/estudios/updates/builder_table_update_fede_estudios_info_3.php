<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosInfo3 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_info', function($table)
        {
            $table->renameColumn('estudios_id', 'estudio_id');
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_info', function($table)
        {
            $table->renameColumn('estudio_id', 'estudios_id');
        });
    }
}
