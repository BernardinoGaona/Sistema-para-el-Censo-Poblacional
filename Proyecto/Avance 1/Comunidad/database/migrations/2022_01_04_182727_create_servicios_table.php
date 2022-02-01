<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id('id_servicio');

            $table->integer('7Aguas_Blancas');
            $table->enum('Acueducto_7', [1, 0]);
            $table->enum('Camion_7', [1, 0]);
            $table->enum('ViaPublivca_7', [1, 0]);
            $table->enum('Rio_7', [1, 0]);
            $table->text('Otro_7');

            $table->integer('8Aguas_Servidas');
            $table->enum('Cloacas_8', [1, 0]);
            $table->enum('PozoSeptico_8', [1, 0]);
            $table->enum('Letrina_8', [1, 0]);
            $table->enum('AireLibre_8', [1, 0]);
            $table->enum('EnBolsas_8', [1, 0]);
            $table->text('Otro_8');

            $table->integer('9Gas');
            $table->enum('Bombona_9', [1, 0]);
            $table->enum('Tuberia_9', [1, 0]);
            $table->integer('10Kg_9');
            $table->integer('18Kg_9');
            $table->integer('27Kg_9');
            $table->integer('43Kg_9');
            $table->text('Regularidad_9');

            $table->integer('10Sistema_Electrico');
            $table->enum('Elecpublico_10', [1, 0]);
            $table->enum('Plantapropia_10', [1, 0]);
            $table->enum('Medidor_10', [1, 0]);
            $table->text('Regularidad_10');

            $table->integer('11Telefonia');
            $table->enum('Domiciliaria_11', [1, 0]);
            $table->enum('Celular_11', [1, 0]);
            $table->enum('Prepago_11', [1, 0]);
            $table->enum('CentroConexion_11', [1, 0]);
            $table->text('Otro_11');

            $table->integer('12Transporte');
            $table->enum('Propio_12', [1, 0]);
            $table->enum('Publico_12', [1, 0]);
            $table->enum('Busetas_12', [1, 0]);
            $table->enum('Taxiprivado_12', [1, 0]);
            $table->text('Otro_12');

            $table->integer('13Mecanismo_Informacion');
            $table->enum('Television_13', [1, 0]);
            $table->enum('Radio_13', [1, 0]);
            $table->enum('Prensa_13', [1, 0]);
            $table->enum('Internet_13', [1, 0]);
            $table->enum('Mediosalternativos_13', [1, 0]);
            $table->text('Otro_13');

            $table->integer('14Servicios_Comunales');
            $table->enum('Mercados_14', [1, 0]);
            $table->enum('Abastos_14', [1, 0]);
            $table->enum('Bodegas_14', [1, 0]);
            $table->enum('Farmacias_14', [1, 0]);
            $table->enum('PlazasParques_14', [1, 0]);
            $table->enum('Escuelas_14', [1, 0]);
            $table->enum('Liceos_14', [1, 0]);
            $table->enum('CentroSalud_14', [1, 0]);
            $table->enum('Canchas_14', [1, 0]);
            $table->enum('Casacomunal_14', [1, 0]);
            $table->enum('Iglesias_14', [1, 0]);
            $table->text('Otro_14');

            $table->integer('15Organizaciones_Comunitarias');
            $table->text('Respuesta_15');

            $table->integer('16Discapacidad_Familia');
            $table->text('Respuesta_16');

            $table->integer('17Enfermedad_cronica');
            $table->text('Respuesta_17');

            $table->integer('18Medicamientos_permanentes');
            $table->text('Respuesta_18');

            $table->integer('19Ayuda_tecnica');
            $table->text('Respuesta_19');

            $table->integer('20Intervencion_quirurgica');
            $table->text('Respuesta_20');

            $table->integer('21Animal_domestico');
            $table->integer('Cantidad_21');
            $table->text('Especificacion_21');

            $table->integer('22Insectos_roedores');
            $table->text('Respuesta_22');

            $table->integer('23Sistema_proteccion');
            $table->text('Respuesta_23');

            $table->integer('24Amparosistema_proteccion');
            $table->text('Respuesta_24');

            $table->integer('25Nro_Vivienda');
            $table->integer('Nrohabitantes_25');
            $table->integer('Nrofamilias_25');

            $table->integer('26Actividad_comercial');
            $table->text('Respuesta_26');

            $table->integer('27Factores_Riesgos');
            $table->enum('Tabaquismo_27', [1, 0]);
            $table->enum('Drogas_27', [1, 0]);
            $table->enum('Alcoholismo_27', [1, 0]);
            $table->enum('Emabarazotemprano_27', [1, 0]);
            $table->text('Otro_27');

            $table->integer('28Gestatnte_Gfamilia');
            $table->integer('NroSemanas_28');
            $table->enum('Embarazocontrolado_28', [1, 0]);

            $table->integer('29Proyecto_Socio-Productivo');
            $table->text('Respuesta_29');

            $table->text('30Necesidad_Desarrollo');
            $table->text('31Participacion_Proyecto');

            $table->integer('32Pregunta');
            $table->text('Respuesta_32');

            $table->text('33AporteBMS_Fortalecimiento');
            $table->longText('34Observaciones_Generales');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('nucleof_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade') ;
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
        Schema::dropIfExists('servicios');
    }
}
