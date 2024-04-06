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
        Schema::create('open_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('rate')->default(5);
            $table->text('content');
            $table->string('model');
            $table->foreignId('unit_id')->references('id')->on('units')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('open_questions');
    }
};
