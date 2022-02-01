<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNucleoFsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nucleo_fs', function (Blueprint $table) {
            $table->id('id_nucleo');
            $table->string('jefe_f');
            $table->string('slug');
            $table->enum('status', [1, 0])->default(1);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('vivienda_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('persona_id')->references('id_persona')->on('personas')->onUpdate('cascade');
            $table->foreign('vivienda_id')->references('id_vivienda')->on('viviendas')->onUpdate('cascade');
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
        Schema::dropIfExists('nucleo_fs');
    }
}
