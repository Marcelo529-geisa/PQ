<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudiosUsers3 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->dropPrimary(['estudio_id','user_id']);
            $table->integer('estudios_id');
            $table->integer('users_id');
            $table->dropColumn('estudio_id');
            $table->dropColumn('user_id');
            $table->primary(['estudios_id','users_id']);
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_users', function($table)
        {
            $table->dropPrimary(['estudios_id','users_id']);
            $table->dropColumn('estudios_id');
            $table->dropColumn('users_id');
            $table->integer('estudio_id');
            $table->integer('user_id');
            $table->primary(['estudio_id','user_id']);
        });
    }
}
