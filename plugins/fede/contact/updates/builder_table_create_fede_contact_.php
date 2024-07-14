<?php namespace Fede\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFedeContact extends Migration
{
    public function up()
    {
        Schema::create('fede_contact_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name');
            $table->string('email');
            $table->text('mensaje')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fede_contact_');
    }
}
