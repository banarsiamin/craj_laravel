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
        Schema::table('articles', function (Blueprint $table) {
            // Check if columns don't exist before adding them
            if (!Schema::hasColumn('articles', 'references')) {
                $table->longText('references')->nullable()->after('abstract');
            }
            
            if (!Schema::hasColumn('articles', 'author_contributor_list')) {
                $table->longText('author_contributor_list')->nullable()->after('references');
            }
            
            if (!Schema::hasColumn('articles', 'pdf_file')) {
                $table->string('pdf_file')->nullable()->after('doi');
            }
            
            if (!Schema::hasColumn('articles', 'html_file')) {
                $table->string('html_file')->nullable()->after('pdf_file');
            }
            
            if (!Schema::hasColumn('articles', 'docx_file')) {
                $table->string('docx_file')->nullable()->after('html_file');
            }
            
            if (!Schema::hasColumn('articles', 'html_content')) {
                $table->longText('html_content')->nullable()->after('docx_file');
            }
            
            if (!Schema::hasColumn('articles', 'keywords') && !Schema::hasColumn('articles', 'keywords')) {
                $table->string('keywords')->nullable()->after('html_content');
            }
            
            if (!Schema::hasColumn('articles', 'pages')) {
                $table->string('pages')->nullable()->after('keywords');
            }
            
            if (!Schema::hasColumn('articles', 'published_date')) {
                $table->date('published_date')->nullable()->after('pages');
            }
            
            if (!Schema::hasColumn('articles', 'has_permissions')) {
                $table->boolean('has_permissions')->default(false)->after('published_date');
            }
            
            if (!Schema::hasColumn('articles', 'license_url')) {
                $table->string('license_url')->nullable()->after('has_permissions');
            }
            
            if (!Schema::hasColumn('articles', 'copyright_holder')) {
                $table->string('copyright_holder')->nullable()->after('license_url');
            }
            
            if (!Schema::hasColumn('articles', 'copyright_year')) {
                $table->integer('copyright_year')->nullable()->after('copyright_holder');
            }
            
            if (!Schema::hasColumn('articles', 'featured_image')) {
                $table->string('featured_image')->nullable()->after('copyright_year');
            }
        });

        // Create the subject_area_article pivot table if it doesn't exist
        if (!Schema::hasTable('subject_area_article')) {
            Schema::create('subject_area_article', function (Blueprint $table) {
                $table->id();
                $table->foreignId('subject_area_id')->constrained()->onDelete('cascade');
                $table->foreignId('article_id')->constrained()->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Only drop columns that we added
        Schema::table('articles', function (Blueprint $table) {
            $columns = [
                'references',
                'author_contributor_list',
                'pdf_file',
                'html_file',
                'docx_file',
                'html_content',
                'pages',
                'has_permissions',
                'license_url',
                'copyright_holder',
                'copyright_year',
                'featured_image'
            ];
            
            foreach ($columns as $column) {
                if (Schema::hasColumn('articles', $column)) {
                    $table->dropColumn($column);
                }
            }
        });

        // Only drop the pivot table if it exists
        if (Schema::hasTable('subject_area_article')) {
            Schema::dropIfExists('subject_area_article');
        }
    }
}; 