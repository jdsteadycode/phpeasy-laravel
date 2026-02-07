<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// path to User Class..
use App\Models\User;

// path to Concept Class..
use App\Models\Concept;

class ConceptProgressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // log the task..
        logger()->info('[ConceptProgressesSeeder@run] Seeding initiated!');

        // get users..
        $jeet = User::where('name', 'jeet')->first();
        $kevin = User::where('name', 'kevin')->first();

        // get concepts..
        $indexedArrays = Concept::find(1);
        $strings = Concept::find(3);

        // save progress
        // for jeet
        $jeet->progresses()->updateOrCreate(
            [
                'concept_id' => $indexedArrays->id,
            ],
            [
                'status' => 'in_progress'
            ]
        );
        logger()->info('Progress saved!', ['concept' => $indexedArrays->name]);


        $jeet->progresses()->updateOrCreate(
            [
                'concept_id' => $strings->id,
            ],
            [
                'status' => 'understood'
            ]
        );
        logger()->info('Progress saved!', ['concept' => $strings->name]);

        // for kevin
        $kevin->progresses()->updateOrCreate(
            [
                'concept_id' => $strings->id,
            ],
            [
                'status' => 'understood'
            ]
        );
        logger()->info('Progress saved!', ['concept' => $strings->name]);

        // log complete.
        logger()->info('Progress Seeding complete.');
    }
}
