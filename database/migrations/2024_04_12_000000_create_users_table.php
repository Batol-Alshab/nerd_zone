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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('phone_number')->nullable();
            $table->boolean('sex');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable()->default('http://127.0.0.1:8000/images/profile_image/profile.jpg');
            $table->integer('rate')->nullable()->default(10);
            $table->longText('opinion')->nullable();
            $table->string('level')->default('مبتدئ');
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('section_id')->references('id')->on('sections')->cascadeOnDelete();
            $table->engine = 'InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
