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
        Schema::create('prayer', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('regency_id'); // Ganti dengan foreign key sesuai relasi Anda
            $table->time('fajr');
            $table->time('sunrise');
            $table->time('dhuhr');
            $table->time('asr');
            $table->time('sunset');
            $table->time('maghrib');
            $table->time('isha');
            $table->time('imsak');
            $table->timestamps();

            // Definisi foreign key
            $table->foreign('regency_id')->references('id')->on('regencies')->onDelete('cascade');

            // Indeks untuk pencarian lebih efisien
            $table->index(['date', 'regency_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prayer');
    }
};
