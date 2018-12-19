<?php namespace Javier\Cpitvc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJavierCpitvcIngeniero extends Migration
{
    public function up()
    {
        Schema::table('javier_cpitvc_ingeniero', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('matriculado')->change();
            $table->string('nombres')->change();
            $table->string('apellidos')->change();
            $table->string('numeromatricula')->change();
            $table->string('resolucion_nacional')->change();
            $table->string('resolucion_seccional')->change();
            $table->string('tarjeta')->change();
            $table->string('estado')->change();
            $table->string('direccionpersona')->change();
            $table->string('telefono')->change();
            $table->string('celular')->change();
            $table->string('email')->change();
            $table->string('web')->change();
            $table->string('estado_transaccion')->change();
        });
    }
    
    public function down()
    {
        Schema::table('javier_cpitvc_ingeniero', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
            $table->string('matriculado', 191)->change();
            $table->string('nombres', 191)->change();
            $table->string('apellidos', 191)->change();
            $table->string('numeromatricula', 191)->change();
            $table->string('resolucion_nacional', 191)->change();
            $table->string('resolucion_seccional', 191)->change();
            $table->string('tarjeta', 191)->change();
            $table->string('estado', 191)->change();
            $table->string('direccionpersona', 191)->change();
            $table->string('telefono', 191)->change();
            $table->string('celular', 191)->change();
            $table->string('email', 191)->change();
            $table->string('web', 191)->change();
            $table->string('estado_transaccion', 191)->change();
        });
    }
}
