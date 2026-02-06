<?php

// package path
namespace App\Models;

// path to Model Class.
use Illuminate\Database\Eloquent\Model;

// path to User Model Class.
use App\Models\User;

// path to Concept Model Class.
use App\Models\Concept;

// path to TestCase Model Class.
use App\Models\TestCase;

// UDC Problem inherits Model Class
class Problem extends Model
{
    // columns to be filled..
    protected $fillable = [
        'title',
        'description',
        'sample_input',
        'sample_output',
        'difficulty',
        'starter_code',
        'function_type',
        'function_name',
        'hints',
        'user_id',
        'concept_id'
    ];

    // () -> get related user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // () -> get related concept
    public function concept()
    {
        return $this->belongsTo(Concept::class);
    }

    // () -> get testcases of it.
    public function testCases()
    {
        return $this->hasMany(TestCase::class);
    }
}
