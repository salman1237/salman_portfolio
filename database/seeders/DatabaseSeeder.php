<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\IndividualCompetition;
use App\Models\OnlineJudge;
use App\Models\PersonalInfo;
use App\Models\ProgrammingLanguage;
use App\Models\Project;
use App\Models\Skill;
use App\Models\TeamCompetition;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a default user for admin panel
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@portfolio.com',
            'password' => Hash::make('password'),
        ]);

        // Seed CV data
        $this->call(CVDataSeeder::class);
    }
}
