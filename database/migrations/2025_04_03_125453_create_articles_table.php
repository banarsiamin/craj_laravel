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
            $table->string('title');
            $table->text('abstract');
            $table->string('author_name');
            $table->string('email');
            $table->string('affiliation');
            $table->string('country');
            $table->string('keywords');
            $table->string('category');
            $table->string('volume')->nullable();
            $table->string('issue')->nullable();
            $table->string('doi')->nullable();
            $table->string('page_no')->nullable();
            $table->integer('views')->default(0);
            $table->string('manuscript_path');
            $table->string('cover_letter_path')->nullable();
            $table->boolean('is_published')->default(false);
            $table->date('published_date')->nullable();
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
