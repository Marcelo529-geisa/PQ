<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosAfirma extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_afirma', function($table)
        {
            $table->renameColumn('estudios_id', 'estudio_id');
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_afirma', function($table)
        {
            $table->renameColumn('estudio_id', 'estudios_id');
        });
    }
}
