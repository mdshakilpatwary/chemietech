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
        Schema::create('product_sub_cats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id'); 
            $table->foreign('cat_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->string('name');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sub_cats');
    }
};
