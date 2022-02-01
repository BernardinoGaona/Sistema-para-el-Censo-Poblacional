<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunidades', function (Blueprint $table) {
            $table->id('id_comunidad');
            $table->string('name');
            $table->string('direccion');
            $table->enum('status', [1, 0])->default(1);
            $table->unsignedBigInteger('sector_id');
            $table->unsignedBigInteger('parroquia_id');
            
            $table->foreign('sector_id')->references('id_sector')->on('sectores')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('comunidades');
    }
}
