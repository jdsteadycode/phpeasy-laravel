<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// path to User Class.
use App\Models\User;

// path to Problem Class.
use App\Models\Problem;

class SubmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // log the task.
        logger()->info('[SubmissionsSeeder@run] Submission Seeding initiated!');

        // get the user.
        $jeet = User::findOrFail(2);
        $kevin = User::findOrFail(3);

        // get the problems..
        $lastOddProblem = Problem::findOrFail(1);
        $toastMessageProblem = Problem::findOrFail(4);

        // add submissions by user related to given problems..
        // submissions by user: jeet.
        $jeet->submissions()->create([
            'code' => <<<'PHP'
                function indexOfLastOdd($numbers) {
                    return 4;
                }
            PHP,
            'execution_status' => 'error',
            'problem_id' => $lastOddProblem->id
        ]);
        logger()->info('Submitted code', ['problem' => $lastOddProblem->title]);

        $jeet->submissions()->create([
            'code' => <<<'PHP'
                function getToastMessage($product) {
                    return "$product is added to your cart.";
                }
            PHP,
            'execution_status' => 'success',
            'problem_id' => $toastMessageProblem->id
        ]);
        logger()->info('Submitted code', ['problem' => $toastMessageProblem->title]);

        // submissions by user: kevin.
        $kevin->submissions()->create([
            'code' => <<<'PHP'
                function getToastMessage($product) {
                    return "$product is added to your cart.";
                }
            PHP,
            'execution_status' => 'success',
            'problem_id' => $toastMessageProblem->id
        ]);
        logger()->info('Submitted code', ['problem' => $toastMessageProblem->title]);

        // logging completed..
        logger()->info('Submission complete.');
    }
}
