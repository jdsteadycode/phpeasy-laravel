<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// path to Problem Model
use App\Models\Problem;

// path to Concept Model
use App\Models\Concept;

// path to User Model
use App\Models\User;

class ProblemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // log the operation
        logger()->info('[ProblemsSeeder@run] Problems Seeding initiated');

        // get concept
        $IndexedArrays = Concept::where('name', 'Indexed Arrays')->first();
        $AssociativeArrays = Concept::where('name', 'Associative Arrays')->first();
        $Strings = Concept::where('name', 'Strings')->first();

        // get user
        $admin = User::where('role', 'admin')->first();

        // add problem(s)
        Problem::updateOrCreate(
            [
                'title' => 'What is index of last odd number?',
                'concept_id' => $IndexedArrays->id,
            ],
            [

                'description' => 'From the given list of natural numbers get the index of last odd one from all.',
                'difficulty' => 'easy',
                'sample_input' => <<<'PHP'
                $numbers = [1, 2, 3, 4, 5, 6];
            PHP,
                'sample_output' => '4',
                'starter_code' => <<<'PHP'
                function indexOfLastOdd($numbers) {
                    // TODO, Make sure to return data!;
                }
            PHP,
                'function_name' => 'indexOfLastOdd',
                'function_type' => 'single_param',
                'hints' => 'no AI! try yourselves',
                'user_id' => $admin->id
            ]
        );
        logger()->info('Added problem: What is index of last odd number?', ['concept_name' => $IndexedArrays->name]);

        Problem::updateOrCreate(
            [
                'title' => 'Tell us about your skills!',
                'concept_id' => $IndexedArrays->id,
            ],
            [

                'description' => 'Add your skills in indexed array and show latest skill',
                'difficulty' => 'easy',
                'sample_input' => <<<'PHP'
                $skills = ["communication", "active learning"];
            PHP,
                'sample_output' => 'active learning',
                'starter_code' => <<<'PHP'
                function getLatestSkill($skills) {
                    // TODO, Make sure to return data!;
                }
            PHP,
                'function_name' => 'getLatestSkill',
                'function_type' => 'single_param',
                'hints' => 'Notice Order of skills',
                'user_id' => $admin->id
            ]
        );
        logger()->info('Added problem: Tell us about your skills!', ['concept_name' => $IndexedArrays->name]);

        Problem::updateOrCreate([
            'title' => 'Get project version!',
            'concept_id' => $AssociativeArrays->id,
        ], [

            'description' => 'From given associative of project details show the version of project!',
            'difficulty' => 'easy',
            'sample_input' => <<<'PHP'
                $projectDetails = [
                    "name" => "financial dashboard",
                    "version" => "1.1"
                ];
            PHP,
            'sample_output' => '1.1',
            'starter_code' => <<<'PHP'
                function getProjectVersion($projectDetails) {
                    // TODO, Make sure to return data!;
                }
            PHP,
            'function_name' => 'getProjectVersion',
            'function_type' => 'single_param',
            'hints' => 'no AI! try yourselves',
            'user_id' => $admin->id
        ]);
        logger()->info('Added problem: Get project version!', ['concept_name' => $AssociativeArrays->name]);

        Problem::updateOrCreate([
            'title' => 'A simple toast!',
            'concept_id' => $Strings->id,
        ], [
            'description' => 'Create a simple message showing product added to cart for add to cart system.',
            'difficulty' => 'easy',
            'sample_input' => <<<'PHP'
                $product = "milk";
            PHP,
            'sample_output' => 'milk is added to your cart.',
            'starter_code' => <<<'PHP'
                function getToastMessage($product) {
                    // TODO, Make sure to return data!;
                }
            PHP,
            'function_name' => 'getToastMessage',
            'function_type' => 'multi_param',
            'hints' => 'should work for any product name passed',
            'user_id' => $admin->id
        ]);
        logger()->info('Added problem: A simple toast!', ['concept_name' => $Strings->name]);

        // log the result
        logger()->info('Problems Seeding complete.');
    }
}
