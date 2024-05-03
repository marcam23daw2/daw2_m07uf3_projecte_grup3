<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->string('dni_client',9)->unique();
            $table->primary('dni_client');
            $table->string('nom_cognoms',80);
            $table->integer('edat');
            $table->string('telefon');
            $table->string('adreça');
            $table->string('ciutat');
            $table->string('pais');
            $table->string('email')->unique();
            $table->string('numero_permis_conduccio');
            $table->integer('punts');
            $table->string('tipus_targeta');
            $table->string('numero_targeta');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
