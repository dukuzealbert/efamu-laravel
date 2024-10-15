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
        Schema::create('weather_datas', function (Blueprint $table) {
            $table->id();
            $table->string('location',45);
            $table->string('temperature',45);
            $table->string('humidity',45);
            $table->string('rainfall',45);
            $table->string('wind_speed',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather_datas');
    }
};
