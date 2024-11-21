<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Eloquent Relationships: Many To Many
return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cars_id');
            $table->foreign('cars_id')->references('id')->on('cars')->onDelete('cascade');
            $table->unsignedBigInteger('features_id');
            $table->foreign('features_id')->references('id')->on('features')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars_features');
    }
};