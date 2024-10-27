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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->char("Azienda",50);
            $table->char("Stazione_di_partenza",100);
            $table->char("Stazione_di_arrivo",100);
            $table->date("Data_di_partenza");
            $table->time("Orario_di_partenza");
            $table->time("Orario_di_arrivo");
            $table->char("Codice_treno",20)->unique();
            $table->integer("Numero_carrozze");
            $table->boolean("In_orario");
            $table->boolean("cancellato");
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
