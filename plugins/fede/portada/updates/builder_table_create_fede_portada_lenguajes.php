<?php namespace Fede\Portada\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFedePortadaLenguajes extends Migration
{
    public function up()
    {
        Schema::create('fede_portada_lenguajes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('btncontinue')->nullable();
            $table->string('btnclose')->nullable();
            $table->string('btnhelp')->nullable();
            $table->string('btnagreement')->nullable();
            $table->string('btnneutral')->nullable();
            $table->string('btndisagreement')->nullable();
            $table->string('btntransfer')->nullable();
            $table->string('btnmail')->nullable();
            $table->string('btnprint')->nullable();
            $table->string('btnexit')->nullable();
            $table->string('selectitem')->nullable();
            $table->string('leavesitewarning')->nullable();
            $table->string('backbutton')->nullable();
            $table->string('fillinrequiredfields')->nullable();
            $table->string('errorhead')->nullable();
            $table->string('errorwindowtoosmall')->nullable();
            $table->string('welcomehead')->nullable();
            $table->text('welcometext')->nullable();
            $table->string('loginhead')->nullable();
            $table->text('logintext')->nullable();
            $table->string('loginformheader')->nullable();
            $table->string('loginnoinput')->nullable();
            $table->string('logininvalidinput')->nullable();
            $table->string('loginnoconnection')->nullable();
            $table->string('introhead')->nullable();
            $table->text('introtext')->nullable();
            $table->string('step1head')->nullable();
            $table->text('step1text')->nullable();
            $table->string('step2head')->nullable();
            $table->text('step2text')->nullable();
            $table->string('step3head')->nullable();
            $table->text('step3text')->nullable();
            $table->string('step4head')->nullable();
            $table->text('step4text')->nullable();
            $table->string('step5head')->nullable();
            $table->text('step5text')->nullable();
            $table->string('transferhead')->nullable();
            $table->string('transfertext')->nullable();
            $table->text('transferfailed')->nullable();
            $table->text('transferok')->nullable();
            $table->string('mailhead')->nullable();
            $table->text('mailtext')->nullable();
            $table->text('mailbody')->nullable();
            $table->text('printouttext')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fede_portada_lenguajes');
    }
}
