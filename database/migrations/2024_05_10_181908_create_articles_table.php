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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('content')->nullable();
            $table->text('title1')->nullable();
            $table->text('title2')->nullable();
            $table->text('title3')->nullable();
            $table->longText('content1')->nullable();
            $table->longText('content2')->nullable();
            $table->longText('content3')->nullable();
            $table->string('imge')->nullable();
            $table->string('cover');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
