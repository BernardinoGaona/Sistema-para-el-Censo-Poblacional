<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viviendas', function (Blueprint $table) {
            $table->id('id_vivienda');
            $table->string('nro_identificacion');
            $table->string('direccion');
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
        Schema::dropIfExists('viviendas');
    }
}
