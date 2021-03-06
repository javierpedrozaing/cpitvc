<?php namespace Javier\Cpitvc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJavierCpitvcPago extends Migration
{
    public function up()
    {
        Schema::table('javier_cpitvc_pago', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('estado_transaccion')->change();
        });
    }
    
    public function down()
    {
        Schema::table('javier_cpitvc_pago', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
            $table->string('estado_transaccion', 191)->change();
        });
    }
}
