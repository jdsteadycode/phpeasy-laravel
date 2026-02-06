<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// path to Problem Class.
use App\Models\Problem;

class TestCasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // log operation.
        logger()->info('[TestCasesSeeder@run] TestCase creation initiated');

        // get problems
        $lastOddProblem = Problem::findOrFail(1);
        $skillsProblem = Problem::findOrFail(2);
        $projectVersionProblem = Problem::findOrFail(3);
        $toastMessageProblem = Problem::findOrFail(4);


        // add test cases..

        // for last odd problems..
        $lastOddProblem->testCases()->updateOrCreate(
            [
                "input" => [2, 4, 6, 8, 9],
            ],
            [
                "expected_output" => 4,
            ]
        );
        logger()->info('added testcase for', ['problem' => $lastOddProblem->title]);

        $lastOddProblem->testCases()->updateOrCreate(
            [
                "input" => [1, 2],
            ],
            [
                "expected_output" => 0,
            ]
        );
        logger()->info('added testcase', ['problem' => $lastOddProblem->title,]);

        // for skills problem.
        $skillsProblem->testCases()->updateOrCreate(
            [
                "input" => ['active listening', 'adaptive learning', 'collaboration'],
            ],
            [
                "expected_output" => "collaboration",
            ]
        );
        logger()->info('added testcase', ['problem' => $skillsProblem->title,]);

        // for project version problem
        $projectVersionProblem->testCases()->updateOrCreate(
            [
                "input" => ['version' => '2.7'],
            ],
            [
                "expected_output" => "2.7",
            ]
        );
        logger()->info('added testcase', ['problem' => $projectVersionProblem->title,]);

        // for toast message problem
        $toastMessageProblem->testCases()->updateOrCreate(
            [
                "input" => ['chocolate'],
            ],
            [
                "expected_output" => "chocolate is added to your cart.",
            ]
        );
        logger()->info('added testcase', ['problem' => $toastMessageProblem->title,]);

        $toastMessageProblem->testCases()->updateOrCreate(
            [
                "input" => ['shoes'],
            ],
            [
                "expected_output" => "shoes is added to your cart.",
            ]
        );
        logger()->info('added testcase', ['problem' => $toastMessageProblem->title,]);

        // log the message..
        logger()->info('test cases seeding complete!');
    }
}
