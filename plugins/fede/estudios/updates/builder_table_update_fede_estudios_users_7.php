<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosUsers7 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->renameColumn('estudio_type', 'users_type');
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->renameColumn('users_type', 'estudio_type');
        });
    }
}
