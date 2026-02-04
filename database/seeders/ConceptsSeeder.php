<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// path to Class Concept
use App\Models\Concept;

// path to Class Carbon (for timestamps)
use Carbon\Carbon;

class ConceptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get current timestamp
        $now = Carbon::now();

        // Add some concepts
        $concepts = [
            ['name' => 'Indexed Arrays', 'group_name' => 'Arrays'],
            ['name' => 'Associative Arrays', 'group_name' => 'Arrays'],
            ['name' => 'Strings', 'group_name' => 'Basics'],
            ['name' => 'Booleans', 'group_name' => 'Basics'],
            ['name' => 'If-Else Statements', 'group_name' => 'Control Flow']
        ];

        // iterate over each and either update or add new..
        foreach ($concepts as $concept) {
            $status = Concept::updateOrCreate(
                ['name' => $concept['name']],
                ['group_name' => $concept['group_name'], 'created_at' => $now, 'updated_at' => $now]
            );

            // log the status..
            logger()->info('seeding concept data', ['status' => $status, 'concept' => $concept['name']]);
        }
    }
}
