<?php

namespace Database\Seeders;

use App\Models\EditorialBoard;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EditorialBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array of first names
        $firstNames = [
            'John', 'Michael', 'Robert', 'David', 'James', 'William', 'Richard', 'Thomas', 'Charles', 'Daniel',
            'Mary', 'Patricia', 'Jennifer', 'Linda', 'Elizabeth', 'Susan', 'Sarah', 'Karen', 'Nancy', 'Lisa'
        ];

        // Array of last names
        $lastNames = [
            'Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor',
            'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 'Martin', 'Thompson', 'Garcia', 'Martinez', 'Robinson'
        ];

        // Array of specializations
        $specializations = [
            'Artificial Intelligence', 'Machine Learning', 'Data Science', 'Computer Vision',
            'Natural Language Processing', 'Bioinformatics', 'Cloud Computing', 'Cybersecurity',
            'Quantum Computing', 'Robotics', 'Internet of Things', 'Blockchain',
            'Neural Networks', 'Software Engineering', 'Computer Graphics',
            'Human-Computer Interaction', 'Computational Biology', 'Network Security',
            'Big Data Analytics', 'Mobile Computing', 'Information Retrieval',
            'Database Systems', 'Distributed Systems', 'Computer Architecture'
        ];

        // Array of universities
        $universities = [
            'Harvard University', 'Stanford University', 'MIT', 'University of Oxford',
            'University of Cambridge', 'California Institute of Technology', 'Princeton University',
            'Yale University', 'University of Chicago', 'Imperial College London',
            'ETH Zurich', 'National University of Singapore', 'Tsinghua University',
            'University of California, Berkeley', 'University of Toronto', 'University of Edinburgh',
            'Peking University', 'Columbia University', 'University of Tokyo',
            'University of Michigan', 'Cornell University', 'University of Pennsylvania',
            'University of Washington', 'Johns Hopkins University', 'University of California, Los Angeles'
        ];

        // Array of countries
        $countries = [
            'United States', 'United Kingdom', 'Canada', 'Australia',
            'Germany', 'France', 'Japan', 'China', 'India', 'Singapore',
            'Switzerland', 'Netherlands', 'Sweden', 'Italy', 'Spain',
            'South Korea', 'Israel', 'Brazil', 'Russia', 'Norway'
        ];

        // Array of cities
        $cities = [
            'New York', 'London', 'Paris', 'Tokyo', 'Sydney', 'Berlin',
            'Toronto', 'Singapore', 'Beijing', 'Mumbai', 'Zurich', 'Amsterdam',
            'Stockholm', 'Rome', 'Madrid', 'Seoul', 'Tel Aviv', 'São Paulo',
            'Moscow', 'Oslo', 'Hong Kong', 'Vienna', 'Boston', 'San Francisco',
            'Cambridge', 'Oxford', 'Chicago', 'Los Angeles', 'Seattle', 'Austin'
        ];

        // Loop to create 20 editorial board members
        for ($i = 0; $i < 20; $i++) {
            $firstName = $firstNames[array_rand($firstNames)];
            $lastName = $lastNames[array_rand($lastNames)];
            $specialization = $specializations[array_rand($specializations)];
            $university = $universities[array_rand($universities)];
            $country = $countries[array_rand($countries)];
            $city = $cities[array_rand($cities)];
            
            $email = strtolower(str_replace(' ', '.', $firstName)) . '.' . 
                     strtolower(str_replace(' ', '.', $lastName)) . '@' . 
                     strtolower(str_replace([' ', ','], '', Str::slug($university))) . '.edu';
            
            $description = "<p>Prof. {$firstName} {$lastName} is a distinguished researcher and educator in the field of {$specialization} at {$university}. With over " . rand(5, 30) . " years of experience, " . ($firstName == 'Mary' || $firstName == 'Patricia' || $firstName == 'Jennifer' || $firstName == 'Linda' || $firstName == 'Elizabeth' || $firstName == 'Susan' || $firstName == 'Sarah' || $firstName == 'Karen' || $firstName == 'Nancy' || $firstName == 'Lisa' ? 'she' : 'he') . " has made significant contributions to the advancement of knowledge in " . ($firstName == 'Mary' || $firstName == 'Patricia' || $firstName == 'Jennifer' || $firstName == 'Linda' || $firstName == 'Elizabeth' || $firstName == 'Susan' || $firstName == 'Sarah' || $firstName == 'Karen' || $firstName == 'Nancy' || $firstName == 'Lisa' ? 'her' : 'his') . " field.</p>";
            
            $description .= "<p>" . ($firstName == 'Mary' || $firstName == 'Patricia' || $firstName == 'Jennifer' || $firstName == 'Linda' || $firstName == 'Elizabeth' || $firstName == 'Susan' || $firstName == 'Sarah' || $firstName == 'Karen' || $firstName == 'Nancy' || $firstName == 'Lisa' ? 'She' : 'He') . " has published numerous articles in top-tier journals and presented " . ($firstName == 'Mary' || $firstName == 'Patricia' || $firstName == 'Jennifer' || $firstName == 'Linda' || $firstName == 'Elizabeth' || $firstName == 'Susan' || $firstName == 'Sarah' || $firstName == 'Karen' || $firstName == 'Nancy' || $firstName == 'Lisa' ? 'her' : 'his') . " research at prestigious international conferences. " . ($firstName == 'Mary' || $firstName == 'Patricia' || $firstName == 'Jennifer' || $firstName == 'Linda' || $firstName == 'Elizabeth' || $firstName == 'Susan' || $firstName == 'Sarah' || $firstName == 'Karen' || $firstName == 'Nancy' || $firstName == 'Lisa' ? 'Her' : 'His') . " research interests include " . strtolower($specializations[array_rand($specializations)]) . ", " . strtolower($specializations[array_rand($specializations)]) . ", and " . strtolower($specializations[array_rand($specializations)]) . ".</p>";
            
            $description .= "<p>Prof. {$lastName} holds a Ph.D. from " . $universities[array_rand($universities)] . " and has been recognized with several awards including the " . ['Distinguished Researcher Award', 'Innovation in Teaching Award', 'Outstanding Contribution to Science Award', 'Academic Excellence Award', 'Pioneer in Technology Award'][rand(0, 4)] . ".</p>";
            
            EditorialBoard::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'phone' => '+' . rand(1, 9) . rand(0, 9) . ' ' . rand(100, 999) . ' ' . rand(100, 999) . ' ' . rand(1000, 9999),
                'website' => 'www.' . strtolower(str_replace([' ', ','], '', Str::slug($university))) . '.edu/~' . strtolower($lastName),
                'street_address' => rand(1, 999) . ' ' . ['Main', 'Park', 'Oak', 'Maple', 'Cedar', 'Pine', 'Elm', 'University', 'College', 'Research'][rand(0, 9)] . ' ' . ['Street', 'Avenue', 'Boulevard', 'Drive', 'Road', 'Lane', 'Way', 'Plaza', 'Court', 'Terrace'][rand(0, 9)],
                'city' => $city,
                'state_province_region' => ['California', 'New York', 'Massachusetts', 'Washington', 'Texas', 'Illinois', 'Greater London', 'Ontario', 'New South Wales', 'Bavaria', 'Île-de-France', 'Tokyo Prefecture', 'Beijing Municipality', 'Maharashtra', 'Zürich', 'North Holland', 'Stockholm County', 'Lazio', 'Madrid Community', 'Seoul Capital Area'][array_rand($countries)],
                'zip_postal_code' => rand(10000, 99999),
                'country' => $country,
                'area_of_specialization' => $specialization,
                'description' => $description,
                'status' => EditorialBoard::STATUS_APPROVED,
            ]);
        }
    }
}
