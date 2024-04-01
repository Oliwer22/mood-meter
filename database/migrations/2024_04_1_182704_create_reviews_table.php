<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // 2024_04_1_182704_create_reviews_table.php
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('emoji_id');
            $table->string('name');
            $table->string('lastName')->nullable();
            $table->string('leeftijd')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('opleiding')->nullable();
            $table->string('vooropleiding')->nullable();
            $table->text('review');
            $table->date('datum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
