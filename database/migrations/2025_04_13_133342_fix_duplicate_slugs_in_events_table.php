<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Stap 1: Vul lege slugs
        DB::table('events')
            ->orderBy('id')
            ->whereNull('slug')
            ->orWhere('slug', '')
            ->each(function ($event) {
                DB::table('events')
                    ->where('id', $event->id)
                    ->update(['slug' => Str::slug($event->name)]);
            });

        // Stap 2: Verwijder complete duplicates
        $duplicates = DB::table('events')
            ->select('slug')
            ->groupBy('slug')
            ->havingRaw('COUNT(*) > 1')
            ->pluck('slug');

        foreach ($duplicates as $slug) {
            $records = DB::table('events')
                ->where('slug', $slug)
                ->orderBy('id')
                ->get();

            // Houd eerste record, verwijder rest
            foreach ($records->slice(1) as $duplicate) {
                $duplicate->delete();
            }
        }

        // Stap 3: Voeg UNIQUE constraint toe
        Schema::table('events', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
    }
};
