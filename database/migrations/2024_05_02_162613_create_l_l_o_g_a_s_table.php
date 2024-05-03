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
        Schema::create('lloga', function (Blueprint $table) {
            $table->string('dni_client',9);
            $table->foreign('dni_client')->references('dni_client')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('matricula_auto');
            $table->foreign('matricula_auto')->references('matricula_auto')->on('autos')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['dni_client','matricula_auto']);
            $table->date('data_prestec');
            $table->date('data_devolucio');
            $table->string('lloc_devolucio');
            $table->float('preu_dia', 8, 2);
            $table->boolean('prestec_retorn_diposit_ple');
            $table->string('tipus_asseguranca');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lloga');
    }
};
