<?php

// package path
namespace App\Models;

// path to Model Class.
use Illuminate\Database\Eloquent\Model;

// path to User Model Class.
use App\Models\User;

// path to Concept Model Class.
use App\Models\Concept;


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

    // () -> related user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // () -> related concept
    public function concept()
    {
        return $this->belongsTo(Concept::class);
    }
}
