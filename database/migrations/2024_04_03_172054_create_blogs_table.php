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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('category_id');
            $table->string('category_id')->nullable();    
            $table->string('title');
            $table->text('extract')->nullable();
            $table->text('description')->nullable();
            $table->string('url_image')->nullable();
            $table->string('url_image2')->nullable();
            $table->string('name_image')->nullable();
            $table->string('name_image2')->nullable();
            $table->string('url_video')->nullable();
            $table->boolean('visible')->default(false);
            $table->boolean('status')->default(false);

            $table->timestamps();

            // $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
