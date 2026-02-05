<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// path to Concept Class
use App\Models\Concept;

class ConceptContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // log the task..
        logger()->info('Seeding data in conceptcontents initiated!');

        // get the concepts
        $IndexedArrays = Concept::where('name', 'Indexed Arrays')->first();
        $AssociativeArrays = Concept::where('name', 'Associative Arrays')->first();
        $Strings = Concept::where('name', 'Strings')->first();
        $Booleans = Concept::where('name', 'Booleans')->first();
        $IFElseStatements = Concept::where('name', 'If-Else Statements')->first();

        // add content
        $IndexedArrays->content()->updateOrCreate([], [
            'description' => 'store / contain multiple items accessible by index',
            'example_code' => <<<'PHP'
                // stock prices till weekend.
                $stockPrices = [10, 6, 20, 22, 2];

                // check stock price of day 3
                echo $stockPrices[2];
            PHP,
            'notes' => "Helpful when data is simple (continuous)\nLike storing natural numbers.",
        ]);

        $AssociativeArrays->content()->updateOrCreate([], [
            'description' => 'holds the data with key containing a value to it.',
            'example_code' => <<<'PHP'
                // portfolio
                $portfolio = [
                    "name" => "Ajey Singh",
                    "age" => "20",
                    "skills" => ["html", "css", "javaScript", "php"],
                    "is_trainee" => false
                ];

                // get skills as string
                $skills = implode(", ", $portfolio['skills']);

                // log skills
                echo "{$portfolio['name']} is hands on with {$skills}.";
            PHP,
            'notes' => "Helpful when data is complex i.e., contains nested data.\nLike storing n number of perosn details",
        ]);

        $Strings->content()->updateOrCreate([], [
            'description' => 'Simple way to store characters, letters, words with ease',
            'example_code' => <<<'PHP'
                // a simple email
                $email = "admin@gmail.com";

                // check log..
                echo "This is my $email address";
            PHP,
            'notes' => "Helpful when storing texts, long texts.\nLike 'Hey I am working as an laravel trainee' - is a string.",
        ]);

        $Booleans->content()->updateOrCreate([], [
            'description' => 'A value which shows one thing (state) either of true / false',
            'example_code' => <<<'PHP'
                // is train departed
                $isDeparted = true;

                // check log.
                echo "$isDeparted! train has departed already";
            PHP,
            'notes' => "Helpful when knowing status of something.\nLike: Is the post deleted i.e., isDeleted=true/false.",
        ]);

        $IFElseStatements->content()->updateOrCreate([], [
            'description' => 'Decide and act on basics of some scenarios or conditions',
            'example_code' => <<<'PHP'
                // delete status?
                $isDeleted = true;

                // data is deleted!
                if($isDeleted) { // same as $isDeleted === true
                    echo "data is deleted successfully";
                }

                // otherwise
                else {
                    echo "data couldn't be deleted."
                }
            PHP,
            'notes' => "Helpful when acting upon certain conditions.\nLike: If delete button is clicked ask for confirmation modal otherwise do nothing.\nElse part executes when If part fails to satisfy the given condition.",
        ]);

        // log the task
        logger()->info('Seeding the Content for Concepts Success');
    }
}
