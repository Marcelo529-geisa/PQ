<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudios4 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
