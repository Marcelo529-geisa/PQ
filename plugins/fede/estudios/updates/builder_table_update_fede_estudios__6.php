<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudios6 extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_', function($table)
        {
            $table->text('distribucion')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_', function($table)
        {
            $table->dropColumn('distribucion');
        });
    }
}
