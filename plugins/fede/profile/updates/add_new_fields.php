<?php namespace Fede\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->text('bio')->nullable();

        });
    }

    public function down()
    {
        $table->dropDown([
            'bio'
            
        ]);
    }

}
