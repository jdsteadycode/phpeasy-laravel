<?php

// package path
namespace App\Models;

// path to Model Class.
use Illuminate\Database\Eloquent\Model;

// path to Problem Class.
use App\Models\Problem;

// UDC TestCase inherits Model Class.
class TestCase extends Model
{
    // columns can be filled!
    protected $fillable = [
        'input',
        'expected_output',
        'problem_id'
    ];

    // handle parsing of input and expected_output
    protected $casts = [
        'input' => 'array',
        'expected_output' => 'array'
    ];

    // () -> get problem related!
    public function problem()
    {
        // belongs to a problem..
        return $this->belongsTo(Problem::class);
    }
}
