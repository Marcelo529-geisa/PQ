<?php namespace Fede\Portada\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFedePortadaMail extends Migration
{
    public function up()
    {
        Schema::create('fede_portada_mail', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('mail')->nullable();
            $table->string('contra')->nullable();
            $table->string('protocolo')->nullable();
            $table->integer('puerto')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fede_portada_mail');
    }
}
