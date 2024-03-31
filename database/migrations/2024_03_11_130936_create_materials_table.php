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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('image')->nullable()->default('C:/xampp/htdocs/nerd_zone/nerd_zone/public/images/material_image/BOOK.png');
            // $table->string('image')->nullable()->default('./BOOK.png');
            $table->string('image')->nullable()->default('BOOK.png');
            $table->foreignId('section_id')->references('id')->on('sections')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
