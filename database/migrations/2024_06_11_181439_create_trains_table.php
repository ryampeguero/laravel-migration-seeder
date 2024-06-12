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
        CREATE TABLE trains(
            id INT NOT NULL AUTO_INCREMENT,
            azienda VARCHAR(255),
            id_capotreno INT UNSIGNED,
            stazione_partenza VARCHAR(255),
            stazione_partenza VARCHAR(255),
            orario_partenza TIME,
            orario_arrivo TIME,
            codice_treno VARCHAR(255),
            numero_carrozze TINYINT,
            numero_passeggeri MEDIUMINT,
            in_orario TINYINT(1),
            cancellato TINYINT(1),
            PRIMARY_KEY(id));
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda')->nullable();
            $table->integer('id_capotreno')->unsigned()->nullable();
            $table->string('stazione_partenza')->nullable();
            $table->string('stazione_arrivo')->nullable();
            $table->time('orario_partenza')->nullable();
            $table->time('orario_arrivo')->nullable();
            $table->string('codice_treno')->nullable();
            $table->tinyInteger('numero_carrozze')->nullable();
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
