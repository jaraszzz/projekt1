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
        Schema::table('rejestr_wejsc', function (Blueprint $table) {
            $table->string('imie_i_nazwisko_pracownik')->nullable();
            $table->string('cel_wizyty')->nullable();
            $table->string('nazwa_podmiotu')->nullable();
            $table->string('entrance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
