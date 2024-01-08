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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->string('outlook')->nullable();
            $table->string('direction')->nullable();
            $table->string('floor')->nullable();
            $table->string('ownership')->nullable();
            $table->integer('room_number')->nullable();
            $table->integer('bath_number')->nullable();
            $table->double('price')->nullable();
            $table->boolean('place_for_barbecue')->nullable();
            $table->boolean('parking')->nullable();
            $table->boolean('left')->nullable();
            $table->boolean('TV_cable')->nullable();
            $table->boolean('internet')->nullable();
            $table->boolean('central_heating')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estate');
    }
};
