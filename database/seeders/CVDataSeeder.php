<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PersonalInfo;
use App\Models\Language;
use App\Models\Certification;
use App\Models\Achievement;
use App\Models\Research;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\ProgrammingLanguage;
use App\Models\Project;

class CVDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        PersonalInfo::truncate();
        Language::truncate();
        Certification::truncate();
        Achievement::truncate();
        Research::truncate();
        Education::truncate();
        Experience::truncate();
        Skill::truncate();
        ProgrammingLanguage::truncate();
        Project::truncate();

        // Personal Info
        PersonalInfo::create([
            'name' => 'Salman Ahmed',
            'tagline' => 'Software Engineer',
            'title' => 'Software Engineer Intern at Campus365',
            'email' => 'salmanahmed382.jubair@gmail.com',
            'phone' => '(+880) 1879246551',
            'address' => 'Savar, Dhaka, Bangladesh',
            'bio' => 'Passionate software developer and competitive programmer with expertise in algorithms, data structures, and full-stack development. ICPC participant with 1800+ problems solved across online judges.',
            'linkedin' => 'https://www.linkedin.com/in/salman-ahmed-5272851a2/',
            'github' => 'https://github.com/salman1237',
            'codeforces' => 'https://codeforces.com/profile/noob_guy_2033',
            'website' => 'https://leetcode.com/u/Salman_2033/',
        ]);

        // Education
        Education::create([
            'institution' => 'Institute of Information Technology, Jahangirnagar University',
            'degree' => 'BSc',
            'field_of_study' => 'Information & Communication Technology',
            'start_date' => '2022-02-01',
            'end_date' => null,
            'description' => 'Dhaka, Bangladesh',
            'order' => 1
        ]);

        // Work Experience
        Experience::create([
            'title' => 'Software Engineer Intern',
            'organization' => 'Campus365',
            'type' => 'work',
            'start_date' => '2025-09-01',
            'end_date' => '2026-02-28',
            'description' => 'Dhaka, Bangladesh. Built and maintained production-ready Laravel applications using MVC architecture and MySQL. Developed RESTful APIs, managed database migrations, and optimized queries for performance. Automated workflows and data-processing tasks using Python scripts. Designed AI automation agents with n8n, integrating APIs and LLM-based workflows.',
            'order' => 1
        ]);

        // Skills - Core CS
        Skill::create(['category' => 'Core CS', 'name' => 'Algorithms', 'order' => 1]);
        Skill::create(['category' => 'Core CS', 'name' => 'Data Structures', 'order' => 2]);
        Skill::create(['category' => 'Core CS', 'name' => 'Object-Oriented Programming', 'order' => 3]);

        // Skills - Programming Languages
        Skill::create(['category' => 'Programming Languages', 'name' => 'C', 'order' => 4]);
        Skill::create(['category' => 'Programming Languages', 'name' => 'C++', 'order' => 5]);
        Skill::create(['category' => 'Programming Languages', 'name' => 'Java', 'order' => 6]);
        Skill::create(['category' => 'Programming Languages', 'name' => 'PHP', 'order' => 7]);
        Skill::create(['category' => 'Programming Languages', 'name' => 'Python', 'order' => 8]);
        Skill::create(['category' => 'Programming Languages', 'name' => 'JavaScript', 'order' => 9]);

        // Skills - Web Development
        Skill::create(['category' => 'Web Development', 'name' => 'Laravel', 'order' => 10]);
        Skill::create(['category' => 'Web Development', 'name' => 'RESTful APIs', 'order' => 11]);
        Skill::create(['category' => 'Web Development', 'name' => 'MVC Architecture', 'order' => 12]);

        // Skills - Databases
        Skill::create(['category' => 'Databases', 'name' => 'MySQL', 'order' => 13]);

        // Skills - Automation & AI
        Skill::create(['category' => 'Automation & AI', 'name' => 'Python Scripting', 'order' => 14]);
        Skill::create(['category' => 'Automation & AI', 'name' => 'Task Automation', 'order' => 15]);
        Skill::create(['category' => 'Automation & AI', 'name' => 'AI Agents (n8n)', 'order' => 16]);

        // Skills - Tools & Platforms
        Skill::create(['category' => 'Tools & Platforms', 'name' => 'Git', 'order' => 17]);
        Skill::create(['category' => 'Tools & Platforms', 'name' => 'GitHub', 'order' => 18]);

        // Projects
        Project::create([
            'title' => 'Laravel Portfolio System',
            'description' => 'Developed a full-stack Laravel-based portfolio system with modern responsive UI. Built an admin dashboard with full CRUD functionality for managing portfolio content. Implemented dynamic, ATS-friendly CV PDF generation using Laravel DomPDF.',
            'technologies' => 'Laravel, PHP 8.2+, TailwindCSS, MySQL, Blade',
            'github_url' => 'https://github.com/salman1237/laravel_portfolio',
            'demo_url' => 'https://ceo.campus365.pro/',
            'order' => 1
        ]);

        Project::create([
            'title' => 'Examination Application Processing System',
            'description' => 'Online university exam application system with secure fee payment and automated admit card generation.',
            'technologies' => 'HTML, CSS, JavaScript, PHP, MySQL',
            'github_url' => 'https://github.com/salman1237/Examination-Application-Processing-System',
            'order' => 2
        ]);

        // Competitive Programming Achievements
        Achievement::create([
            'title' => 'ICPC Dhaka Regional 2025',
            'category' => 'programming',
            'position' => 'Onsite Participant',
            'organization' => 'ACM ICPC',
            'year' => 2025,
            'description' => 'Team: JU_Odd_Bits',
            'order' => 1
        ]);

        Achievement::create([
            'title' => 'ICPC Dhaka Regional Preliminary 2023',
            'category' => 'programming',
            'position' => 'Top 8.4% (210 / 2479)',
            'organization' => 'ACM ICPC',
            'year' => 2023,
            'description' => 'Team: JU_OneMoreZer0',
            'order' => 2
        ]);

        Achievement::create([
            'title' => 'IEEEXtreme 18.0',
            'category' => 'programming',
            'position' => '19th in Bangladesh',
            'organization' => 'IEEE',
            'year' => 2024,
            'order' => 3
        ]);

        Achievement::create([
            'title' => 'IEEEXtreme 17.0',
            'category' => 'programming',
            'position' => '11th in Bangladesh',
            'organization' => 'IEEE',
            'year' => 2023,
            'order' => 4
        ]);

        Achievement::create([
            'title' => 'JU NCPC Preliminary 2023',
            'category' => 'programming',
            'position' => '134 / 1099',
            'organization' => 'Jahangirnagar University',
            'year' => 2023,
            'description' => 'Team: JU_S3',
            'order' => 5
        ]);

        Achievement::create([
            'title' => 'JU NCPC Onsite 2023',
            'category' => 'programming',
            'position' => '167th',
            'organization' => 'Jahangirnagar University',
            'year' => 2023,
            'description' => 'Team: JU_S3',
            'order' => 6
        ]);

        Achievement::create([
            'title' => 'Breaking Code\'23',
            'category' => 'programming',
            'position' => '5th Place',
            'organization' => 'MBSTU',
            'year' => 2023,
            'order' => 7
        ]);

        Achievement::create([
            'title' => 'Problems Solved',
            'category' => 'programming',
            'position' => '1800+ Problems',
            'organization' => 'Online Judges',
            'year' => 2024,
            'description' => 'Solved across multiple competitive programming platforms',
            'order' => 8
        ]);

        $this->command->info('CV data seeded successfully!');
    }
}
