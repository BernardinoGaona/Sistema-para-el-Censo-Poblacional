<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id_persona');
            $table->string('cedula');
            $table->string('names');
            $table->string('surnames');
            $table->enum('sexo', ['Masculino', 'Femenino']);
            $table->string('fecha_n');
            $table->string('parentesco');
            $table->enum('estado_civil', ['Soltero', 'Casado']);
            $table->integer('telefono');
            $table->string('email');
            $table->enum('nivel_instruccion', [
                'Primera',
                'Primaria No Concluida',
                'Secundaria',
                'Secundaria No Concluida',
                'Universitaria',
                'Universitaria No Concluida',
                'Universitaria con Posgrado'
            ]);
            $table->string('profecion_ocu');
            $table->enum('jefe', [1, 0]);
            $table->string('slug');
            $table->enum('status', [1, 0])->default(1);
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade') ;
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
        Schema::dropIfExists('personas');
    }
}
