<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Aerolineas', function (Blueprint $table) {
            $table->id();
            $table->string("Nombre");
            $table->string("Pais");
            $table->string("Disponibilidad");
            $table->string("Anio_fundacion");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Aerolineas');
    }
};
