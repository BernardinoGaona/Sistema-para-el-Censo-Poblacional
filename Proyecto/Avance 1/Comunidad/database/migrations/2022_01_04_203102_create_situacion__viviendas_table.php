<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSituacionViviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situacion__viviendas', function (Blueprint $table) {
            $table->id('id_situacionv');

            $table->integer('1Condicion_terreno');
            $table->enum('Estable_1', [1, 0]);
            $table->enum('Inestable_1', [1, 0]);
            $table->enum('Altoriesgo_1', [1, 0]);
            $table->enum('Vulnerable_1', [1, 0]);
            $table->text('Otro_1');

            $table->integer('2Forma_Tenencia');
            $table->enum('Alquilada_2', [1, 0]);
            $table->enum('Invadida_2', [1, 0]);
            $table->enum('Traspasada_2', [1, 0]);
            $table->enum('Prestada_2', [1, 0]);
            $table->text('Otro_2');

            $table->integer('3Tipo_Vivienda');
            $table->enum('Quinta_3', [1, 0]);
            $table->enum('Casa_3', [1, 0]);
            $table->enum('Apartamento_3', [1, 0]);
            $table->enum('Rancho_3', [1, 0]);
            $table->enum('Barraca_3', [1, 0]);
            $table->enum('Habitacionanexo_3', [1, 0]);

            $table->integer('4Habitaciones_Vivienda');
            $table->enum('Sala_4', [1, 0]);
            $table->enum('Comedor_4', [1, 0]);
            $table->enum('Cocina_4', [1, 0]);
            $table->enum('Baño_4', [1, 0]);
            $table->integer('Cantidadhabitaciones_4');

            $table->integer('5Tipo_Paredes');
            $table->enum('Frisada_5', [1, 0]);
            $table->enum('SinFrisar_5', [1, 0]);
            $table->enum('Tablas_5', [1, 0]);
            $table->enum('BaharequeAdobe_5', [1, 0]);
            $table->enum('Zinc_5', [1, 0]);
            $table->enum('Cartonpiedra_5', [1, 0]);
            $table->text('Otro_5');

            $table->integer('6Tipo_Techo');
            $table->enum('Platabanda_6', [1, 0]);
            $table->enum('Asbesto_6', [1, 0]);
            $table->enum('Teja_6', [1, 0]);
            $table->enum('Zinc_6', [1, 0]);
            $table->enum('Machihembrado_6', [1, 0]);
            $table->enum('Techoraso_6', [1, 0]);
            $table->text('Otro_6');
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('nucleof_id');
            $table->unsignedBigInteger('comunidad_id');
            $table->unsignedBigInteger('caractGF_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('nucleof_id')->references('id_nucleo')->on('nucleo_fs')->onUpdate('cascade');
            $table->foreign('comunidad_id')->references('id_comunidad')->on('comunidades')->onUpdate('cascade');
            $table->foreign('caractGF_id')->references('id_caract')->on('caract_grupo_fs')->onUpdate('cascade');
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
        Schema::dropIfExists('situacion__viviendas');
    }
}
