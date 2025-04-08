<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample articles
        Article::create([
            'title' => 'Role of Machine Learning in Bioinformatics',
            'abstract' => 'This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.',
            'author_name' => 'Dr. Rajesh Kumar',
            'email' => 'rajesh.kumar@example.com',
            'affiliation' => 'Indian Institute of Technology',
            'country' => 'India',
            'keywords' => 'Machine Learning, Bioinformatics, Genomics, Data Analysis',
            'category' => 'Bioinformatics',
            'manuscript_path' => 'articles/sample1.pdf',
            'is_published' => true,
        ]);

        Article::create([
            'title' => 'Climate Change Impact on Agricultural Productivity',
            'abstract' => 'A comprehensive analysis of how climate change affects agricultural productivity in South Asian countries.',
            'author_name' => 'Dr. Priya Singh',
            'email' => 'priya.singh@example.com',
            'affiliation' => 'National Agricultural Research Center',
            'country' => 'India',
            'keywords' => 'Climate Change, Agriculture, Productivity, South Asia',
            'category' => 'Environmental Science',
            'manuscript_path' => 'articles/sample2.pdf',
            'is_published' => true,
        ]);

        Article::create([
            'title' => 'Advances in Quantum Computing',
            'abstract' => 'This paper discusses recent breakthroughs in quantum computing and their potential applications.',
            'author_name' => 'Dr. Amit Sharma',
            'email' => 'amit.sharma@example.com',
            'affiliation' => 'Delhi University',
            'country' => 'India',
            'keywords' => 'Quantum Computing, Quantum Mechanics, Quantum Algorithms',
            'category' => 'Computer Science',
            'manuscript_path' => 'articles/sample3.pdf',
            'is_published' => false,
        ]);
    }
} 