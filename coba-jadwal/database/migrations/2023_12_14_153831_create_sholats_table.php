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
        Schema::create('jadwal_sholat', function (Blueprint $table) {
            $table->date('tanggal')->primary()->unique();
            $table->time('imsak');
            $table->time('subuh');
            $table->time('terbit');
            $table->time('dhuha');
            $table->time('dzuhur');
            $table->time('ashar');
            $table->time('maghrib');
            $table->time('isya');
            $table->string('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sholat');
    }
};