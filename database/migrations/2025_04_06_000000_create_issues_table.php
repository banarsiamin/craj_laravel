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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('abstract')->nullable();
            $table->string('featured_image')->nullable();
            $table->integer('order')->default(0);
            
            // OJS Issues Fields
            $table->string('volume')->nullable();
            $table->string('number')->nullable();
            $table->year('year')->nullable();
            $table->enum('access_status', ['open_access', 'subscription'])->default('open_access');
            $table->date('open_access_date')->nullable();
            
            // OJS Issues Identification
            $table->boolean('show_volume')->default(true);
            $table->boolean('show_number')->default(true);
            $table->boolean('show_year')->default(true);
            $table->boolean('show_access')->default(true);
            $table->boolean('show_title')->default(true);
            
            $table->string('status')->default('draft');
            $table->timestamps();
        });
        
        // Create pivot table for articles in issues
        Schema::create('article_issue', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained()->onDelete('cascade');
            $table->foreignId('issue_id')->constrained()->onDelete('cascade');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
        
        // Create table for issue gallery images
        Schema::create('issue_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('issue_id')->constrained()->onDelete('cascade');
            $table->string('image_path');
            $table->string('caption')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issue_galleries');
        Schema::dropIfExists('article_issue');
        Schema::dropIfExists('issues');
    }
}; 