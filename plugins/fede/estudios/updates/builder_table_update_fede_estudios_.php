<?php namespace Fede\Estudios\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFedeEstudios extends Migration
{
    public function up()
    {
        Schema::table('fede_estudios_', function($table)
        {
            $table->string('afirmaciones')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fede_estudios_', function($table)
        {
            $table->dropColumn('afirmaciones');
        });
    }
}
