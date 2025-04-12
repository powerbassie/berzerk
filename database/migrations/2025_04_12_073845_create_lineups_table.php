<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lineups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->string('artist_name');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lineups');
    }
};
