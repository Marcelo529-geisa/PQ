<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosUsers2 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->dropPrimary(['estudio_id','users_id']);
            $table->renameColumn('users_id', 'user_id');
            $table->primary(['estudio_id','user_id']);
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->dropPrimary(['estudio_id','user_id']);
            $table->renameColumn('user_id', 'users_id');
            $table->primary(['estudio_id','users_id']);
        });
    }
}
