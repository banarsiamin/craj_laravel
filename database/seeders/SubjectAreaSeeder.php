<?php

namespace Database\Seeders;

use App\Models\SubjectArea;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubjectAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // List of academic subject areas
        $subjects = [
            'Mathematics', 'Physics', 'Chemistry', 'Biology', 'Computer Science',
            'Information Technology', 'Artificial Intelligence', 'Machine Learning',
            'Data Science', 'Statistics', 'Economics', 'Business Administration',
            'Marketing', 'Finance', 'Accounting', 'Management', 'Psychology',
            'Sociology', 'Anthropology', 'Political Science', 'History', 'Geography',
            'Environmental Science', 'Earth Science', 'Astronomy', 'Philosophy',
            'Literature', 'Linguistics', 'Languages', 'Arts', 'Architecture',
            'Engineering', 'Medical Science', 'Nursing', 'Pharmacy', 'Law',
            'Education', 'Agriculture', 'Veterinary Science', 'Sports Science',
            'Nutrition', 'Public Health', 'Biotechnology', 'Neuroscience', 
            'Genetics', 'Ecology', 'Microbiology', 'Geology', 'Oceanography',
            'Meteorology', 'Quantum Physics', 'Nanotechnology', 'Robotics',
            'Cybersecurity', 'Software Engineering', 'Network Engineering',
            'Chemical Engineering', 'Civil Engineering', 'Mechanical Engineering',
            'Electrical Engineering', 'Aerospace Engineering', 'Biomedical Engineering',
            'Materials Science', 'Urban Planning', 'Archaeology', 'Musicology',
            'Theatre Studies', 'Film Studies', 'Media Studies', 'Journalism',
            'Communication Studies', 'Cultural Studies', 'Gender Studies',
            'Religious Studies', 'Ethics', 'Logic', 'Metaphysics', 'Epistemology',
            'Aesthetics', 'Criminology', 'International Relations', 'Public Administration',
            'Social Work', 'Developmental Psychology', 'Clinical Psychology',
            'Cognitive Science', 'Behavioral Economics', 'Econometrics', 'Game Theory',
            'Operations Research', 'Project Management', 'Supply Chain Management',
            'Human Resource Management', 'Strategic Management', 'Organizational Behavior',
            'Consumer Behavior', 'Digital Marketing', 'Entrepreneurship', 'Innovation Management',
            'Sustainable Development', 'Renewable Energy'
        ];

        // Create descriptions for subject areas
        $descriptionTemplates = [
            "<p>The field of %s encompasses the study of various theoretical and practical aspects related to %s. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>",
            
            "<p>%s is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of %s.</p>",
            
            "<p>As an academic discipline, %s focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>",
            
            "<p>The study of %s has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>",
            
            "<p>%s represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of %s.</p>"
        ];
        
        // Generate 100 subject areas
        for ($i = 0; $i < 100; $i++) {
            // Select a random subject from the list or generate a new one for subjects beyond the list
            if ($i < count($subjects)) {
                $name = $subjects[$i];
            } else {
                // For additional records beyond our list, we'll append numbers to existing subjects
                $name = $subjects[array_rand($subjects)] . ' ' . ($i - count($subjects) + 1);
            }
            
            // Generate slug from name
            $slug = Str::slug($name);
            
            // Select a random description template and fill it with the subject name
            $descriptionTemplate = $descriptionTemplates[array_rand($descriptionTemplates)];
            $description = sprintf($descriptionTemplate, $name, strtolower($name));
            
            // Create the subject area record
            SubjectArea::create([
                'name' => $name,
                'slug' => $slug,
                'description' => $description,
                // No image is set, as they are optional
            ]);
        }
    }
}
