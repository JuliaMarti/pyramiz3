<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('orden')->nullable();
            $table->boolean('show')->nullable()->default(false);
            
            $table->string('nombre')->nullable();
            $table->string('modelo')->nullable();
            $table->string('imagen_general')->nullable();
            $table->string('imagen_especifica')->nullable();
            $table->string('ficha_tecnica')->nullable();;

            
            $table->boolean('en_venta')->nullable()->default(false);
            $table->boolean('en_alquiler')->nullable()->default(false);
            $table->integer('clase_id')->nullable();
            $table->integer('altura_d')->nullable();
            $table->integer('combustion_id')->nullable();

            $table->string('capacidad')->nullable();
            $table->string('medidas')->nullable();
            $table->string('altura_de_trabajo')->nullable();
            $table->string('altura_de_plataforma')->nullable();
            $table->string('tamaño_global')->nullable();
            $table->string('min_distancia_piso')->nullable();
            $table->string('distancia_entres_ejes')->nullable();
            $table->string('velocidad_ascenso_descenso')->nullable();
            $table->string('motor_electrico')->nullable();
            $table->string('bateria')->nullable();
            $table->string('tamaño_ruedas')->nullable();
            $table->string('peso')->nullable();
            
            
            
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
        Schema::dropIfExists('equipos');
    }
}