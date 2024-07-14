<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosUsers10 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->dropPrimary(['estudio_id','users_id']);
            $table->integer('user_id');
            $table->integer('usable_id');
            $table->renameColumn('users_type', 'usable_type');
            $table->dropColumn('estudio_id');
            $table->dropColumn('users_id');
            $table->primary(['user_id','usable_id']);
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->dropPrimary(['user_id','usable_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('usable_id');
            $table->renameColumn('usable_type', 'users_type');
            $table->integer('estudio_id');
            $table->integer('users_id');
            $table->primary(['estudio_id','users_id']);
        });
    }
}
