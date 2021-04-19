<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->string('orden')->nullable();
            $table->boolean('show')->nullable()->default(false);
            $table->string('nombre')->nullable();
            $table->string('email')->nullable();
            $table->longText('direccion')->nullable();
            $table->longText('telefonos')->nullable();
            $table->longText('map')->nullable();
            $table->boolean('footer')->nullable()->default(false);

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
        Schema::dropIfExists('direcciones');
    }
}
