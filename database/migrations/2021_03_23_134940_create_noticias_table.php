<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('orden')->nullable();
            $table->boolean('show')->nullable()->default(false);
            $table->boolean('destacar')->nullable()->default(false);
            $table->boolean('home')->nullable()->default(false);
            $table->string('titulo')->nullable();
            $table->integer('claseblog_id')->nullable();
            $table->string('imagen')->nullable();
            $table->longText('descripcion')->nullable();
            $table->longText('caracteristicas')->nullable();

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
        Schema::dropIfExists('noticias');
    }
}