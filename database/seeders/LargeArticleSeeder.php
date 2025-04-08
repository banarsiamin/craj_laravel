<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\SubjectArea;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LargeArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // To improve performance, disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        try {
            // Get all subject areas to use for categories
            $subjectAreas = SubjectArea::all()->pluck('name')->toArray();
            
            if (empty($subjectAreas)) {
                $this->command->error('No subject areas found. Please run the SubjectAreaSeeder first.');
                return;
            }
            
            // Define some variables for generating random data
            $authors = [
                'Dr. Rajesh Kumar', 'Dr. Priya Singh', 'Dr. Amit Sharma', 'Dr. Sunita Patel',
                'Dr. Vikram Mehta', 'Dr. Ananya Sen', 'Dr. Rahul Gupta', 'Dr. Neha Verma',
                'Dr. Kiran Reddy', 'Dr. Meera Banerjee', 'Dr. Arjun Saxena', 'Dr. Kavita Desai',
                'Dr. Prakash Rao', 'Dr. Deepika Malhotra', 'Dr. Sameer Joshi', 'Dr. Anjali Kapoor',
                'Dr. Mohammed Khan', 'Dr. Lakshmi Narayan', 'Dr. Suresh Iyer', 'Dr. Nandini Sharma'
            ];
            
            $affiliations = [
                'Indian Institute of Technology, Delhi', 'University of Delhi', 'Jawaharlal Nehru University',
                'All India Institute of Medical Sciences', 'Indian Statistical Institute', 'Tata Institute of Fundamental Research',
                'National Institute of Technology', 'Indian Institute of Science', 'Banaras Hindu University',
                'Aligarh Muslim University', 'Punjab University', 'University of Mumbai', 'University of Calcutta'
            ];
            
            $countries = ['India', 'USA', 'UK', 'China', 'Japan', 'Germany', 'France', 'Canada', 'Australia'];
            
            $titlePrefixes = [
                'Advances in', 'Study of', 'Research on', 'Analysis of', 'Investigation of', 
                'Developments in', 'Perspectives on', 'Novel Approach to', 'Applications of',
                'New Insights into', 'Critical Review of', 'Case Study:', 'Survey of', 
                'Theoretical Framework for'
            ];
            
            // Use smaller batch insertion for better performance and memory management
            $batchSize = 50;
            $totalRecords = 100; // Reduced from 5,000 to just 100 articles
            $batches = ceil($totalRecords / $batchSize);
            
            // Clear existing article data if needed
            // DB::table('articles')->truncate();
            
            $this->command->info("Starting to seed {$totalRecords} articles in {$batches} batches...");
            
            for ($i = 0; $i < $batches; $i++) {
                try {
                    $articles = [];
                    $recordsInBatch = min($batchSize, $totalRecords - ($i * $batchSize));
                    
                    for ($j = 0; $j < $recordsInBatch; $j++) {
                        // Generate random data for each article
                        $authorName = $authors[array_rand($authors)];
                        $category = $subjectAreas[array_rand($subjectAreas)];
                        $titlePrefix = $titlePrefixes[array_rand($titlePrefixes)];
                        $title = $titlePrefix . ' ' . $category;
                        
                        // Generate email from author name
                        $emailName = strtolower(str_replace(' ', '.', $authorName));
                        $emailDomains = ['gmail.com', 'university.edu', 'research.org', 'institute.ac.in'];
                        $email = $emailName . '@' . $emailDomains[array_rand($emailDomains)];
                        
                        // Generate abstract
                        $abstract = "This is a research paper about {$category}. It explores various aspects and applications in this field.";
                        
                        // Generate article record
                        $articleRecord = [
                            'title' => $title,
                            'abstract' => $abstract,
                            'author_name' => $authorName,
                            'email' => $email,
                            'affiliation' => $affiliations[array_rand($affiliations)],
                            'country' => $countries[array_rand($countries)],
                            'keywords' => $category,
                            'category' => $category,
                            'manuscript_path' => 'articles/sample' . rand(1, 5) . '.pdf',
                            'is_published' => rand(0, 1),
                            'views' => rand(0, 500),
                            'created_at' => now()->subDays(rand(1, 90)),
                            'updated_at' => now()->subDays(rand(1, 30)),
                        ];
                        
                        // Set published_date if the article is published
                        if ($articleRecord['is_published']) {
                            $articleRecord['published_date'] = now()->subDays(rand(1, 30));
                        } else {
                            // For unpublished articles, set the field to NULL
                            $articleRecord['published_date'] = null;
                        }
                        
                        $articles[] = $articleRecord;
                    }
                    
                    if (!empty($articles)) {
                        // Insert batch
                        DB::table('articles')->insert($articles);
                        
                        // Show progress
                        $completedRecords = min(($i + 1) * $batchSize, $totalRecords);
                        $this->command->info("Inserted batch " . ($i + 1) . " of $batches (Records: " . $completedRecords . " of $totalRecords)");
                    }
                    
                    // Clear memory between batches
                    unset($articles);
                    if (function_exists('gc_collect_cycles')) {
                        gc_collect_cycles();
                    }
                    
                } catch (\Exception $e) {
                    $this->command->error("Failed to insert batch " . ($i + 1) . ": " . $e->getMessage());
                }
            }
            
            $this->command->info('Finished seeding articles!');
            
        } catch (\Exception $e) {
            $this->command->error("Failed to seed articles: " . $e->getMessage());
        } finally {
            // Re-enable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
