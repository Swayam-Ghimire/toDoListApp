<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Difficulty as difficulties;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $difficultyLevels = [
            ['name' => 'Very Easy', 'value' => 1],
            ['name' => 'Easy', 'value' => 2],
            ['name' => 'Medium', 'value' => 3],
            ['name' => 'Hard', 'value' => 4],
            ['name' => 'Very Hard', 'value' => 5],
            ['name' => 'Insane', 'value' => 6],
            ['name' => 'Very Insane', 'value' => 7],
            ['name' => 'Impossible', 'value' => 8]
        ];
        foreach ($difficultyLevels as $level){
            difficulties::create($level);
        }
    }
}
