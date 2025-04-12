<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('lineups', function (Blueprint $table) {
            // Voeg de nieuwe kolom toe (temporair nullable indien er al data is)
            $table->unsignedBigInteger('artist_id')->nullable()->after('event_id');

            // Voeg de foreign key toe voor de nieuwe kolom
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');

            // Als je de data in de oude kolom wilt migreren, doe dat hier (optioneel)
            // Daarna kun je de oude kolom verwijderen
            $table->dropColumn('artist');
        });
    }

    public function down()
    {
        Schema::table('lineups', function (Blueprint $table) {
            // Maak de oude kolom opnieuw aan (bijv. als string)
            $table->string('artist')->nullable()->after('event_id');

            // Verwijder de foreign key en de nieuwe kolom
            $table->dropForeign(['artist_id']);
            $table->dropColumn('artist_id');
        });
    }
};
