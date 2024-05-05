<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Bagus Besar Bagaskara',
            'email' => 'bagas123ft@gmail.com',
        ]);

        User::factory(10)->create();
        Project::factory(10)->create();
        Task::factory(50)->create();
    }
}
