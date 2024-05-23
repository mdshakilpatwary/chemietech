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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id'); 
            $table->foreign('cat_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->unsignedBigInteger('subcat_id'); 
            $table->foreign('subcat_id')->references('id')->on('product_sub_cats')->onDelete('cascade');
            $table->string('name')->uniqid();
            $table->string('image');
            $table->text('description');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
