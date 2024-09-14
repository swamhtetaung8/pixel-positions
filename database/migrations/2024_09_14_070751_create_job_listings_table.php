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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->integer('salary');
            $table->unsignedBigInteger('job_owner_id');
            $table->foreign('job_owner_id')->references('id')->on('users');
            $table->string('image_url');
            $table->enum('schedule', ['Full Time', 'Part Time']);
            $table->enum('featured', [0, 1]);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};