<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->string('matricula_auto',7)->unique();
            $table->primary('matricula_auto');
            $table->string('numero_bastidor',17);
            $table->string('marca');
            $table->string('model');
            $table->string('color');
            $table->integer('nombre_places');
            $table->integer('nombre_portes');
            $table->integer('grandaria_maleter');
            $table->string('tipus_combustible');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('autos');
    }
};
