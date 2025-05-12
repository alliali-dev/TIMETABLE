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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->nullable();;
            $table->time('start_time')->nullable();;
            $table->date('end_date')->nullable();
            $table->time('end_time')->nullable();;
            $table->foreignId('classe_id')->nullable()->references('id')->on('classes');
            $table->foreignId('cour_id')->nullable()->references('id')->on('cours');
            $table->foreignId('room_id')->nullable()->references('id')->on('rooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
