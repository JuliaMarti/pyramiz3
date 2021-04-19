<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('logo_footer')->nullable();

            $table->boolean('seccion_1_show')->nullable()->default(false);
            $table->string('seccion_1_titulo')->nullable();
            $table->longText('seccion_1_parrafo')->nullable();

            $table->boolean('seccion_2_show')->nullable()->default(false);
            $table->string('seccion_2_titulo')->nullable();
            $table->longText('seccion_2_parrafo')->nullable();
             
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
        Schema::dropIfExists('homes');
    }
}
