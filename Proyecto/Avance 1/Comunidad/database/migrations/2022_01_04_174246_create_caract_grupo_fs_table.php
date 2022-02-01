<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaractGrupoFsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caract_grupo_fs', function (Blueprint $table) {
            $table->id('id_caract');
            $table->string('situacion_laboral');
            $table->enum('inscrip_cne', [1, 0]);
            $table->enum('mision_hogaresp', [1, 0]);
            $table->enum('mision_josegregorio', [1, 0]);
            $table->enum('mision_partohumanizado', [1, 0]);
            $table->enum('mision_lactanciamaterna', [1, 0]);
            $table->enum('mision_amormayor', [1, 0]);
            $table->enum('mision_chambajuvenil', [1, 0]);
            $table->enum('mision_movimientosomosv', [1, 0]);
            $table->string('organizacion_p');
            $table->enum('carnet_patria', [1, 0]);
            $table->integer('codigo_carnet');
            $table->integer('serial_carnet');
            $table->enum('recibe_clap', [1, 0]);
            $table->integer('nro_mercados');
            $table->integer('talla_zapato');
            $table->enum('talla_camisa', ['S', 'M', 'L', 'XL', 'XXL']);
            $table->enum('talla_pantalon', ['28','29','30','31-32','33-34','36','38','40']);
            $table->enum('status', [1, 0])->default(1);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('vivienda_id');
            $table->unsignedBigInteger('nucleof_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade') ;
            $table->foreign('persona_id')->references('id_persona')->on('personas')->onUpdate('cascade');
            $table->foreign('vivienda_id')->references('id_vivienda')->on('viviendas')->onUpdate('cascade');
            $table->foreign('nucleof_id')->references('id_nucleo')->on('nucleo_fs')->onUpdate('cascade');
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
        Schema::dropIfExists('caract_grupo_fs');
    }
}
