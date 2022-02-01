<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectores', function (Blueprint $table) {
            $table->id('id_sector');
            $table->string('name');
            $table->string('direccion');
            $table->enum('status', [1, 0])->default(1);
            $table->unsignedBigInteger('ciudad_id');
            $table->unsignedBigInteger('parroquia_id');

            $table->foreign('ciudad_id')->references('id_ciudad')->on('ciudades')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('parroquia_id')->references('id_parroquia')->on('parroquias')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sectores');
    }
}
