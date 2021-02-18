<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente');
            $table->string('serial',30);
            $table->string('marca_linea',50);
            $table->string('imagen');
            $table->string('observaciones',200);
            $table->date('fecha_ing');
            $table->date('fecha_sal');
            $table->char('estado',2) -> default('PE');
            $table->string('desc_problema',200);
            $table->integer('precio');
            $table->integer('id_empleado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparacions');
    }
}
