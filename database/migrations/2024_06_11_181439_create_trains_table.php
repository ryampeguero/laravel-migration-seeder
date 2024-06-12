<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Azienda
    // Stazione di partenza
    // Stazione di arrivo
    // Orario di partenza
    // Orario di arrivo
    // Codice Treno
    // Numero Carrozze
    // In orario
    // Cancellato
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda')->nullable();
            $table->integer('id_capotreno')->unsigned()->nullable();
            $table->string('stazione_partenza')->nullable();
            $table->string('stazione_arrivo')->nullable();
            $table->time('orario_partenza')->nullable();
            $table->time('orario_arrivo')->nullable();
            $table->string('codice_treno')->nullable();
            $table->integer('numero_carrozze')->nullable();
            $table->mediumInteger('numero_passeggeri')->nullable();
            $table->boolean('in_orario')->nullable();
            $table->boolean('cancellato')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
