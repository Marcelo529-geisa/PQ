<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosUsers12 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->renameColumn('invitado', 'enviado');
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->renameColumn('enviado', 'invitado');
        });
    }
}
