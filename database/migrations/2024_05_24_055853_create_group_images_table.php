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
        Schema::create('group_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_id'); 
            $table->foreign('news_id')->references('id')->on('news_events')->onDelete('cascade');
            $table->text('group_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_images');
    }
};
