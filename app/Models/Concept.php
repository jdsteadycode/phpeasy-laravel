<?php

// package path
namespace App\Models;

// path to Model Class
use Illuminate\Database\Eloquent\Model;

// path to ConceptContent Class
use App\Models\ConceptContent;

// path to Problem Class
use App\Models\Problem;

// path to ConceptProgress Class.
use App\Models\ConceptProgress;

// UDC Concept inheriting from Model Class
class Concept extends Model
{
    // to be filled..
    public $fillable = [
        'description',
        'example_code',
        'notes'
    ];

    // () -> get content
    public function content()
    {
        // i.e., one concept has exactly one content..
        return $this->hasOne(ConceptContent::class);
    }

    // () -> get problems
    public function problems()
    {
        // i.e., concept has various problems..
        return $this->hasMany(Problem::class);
    }

    // () -> get progress
    public function progresses()
    {
        // i.e., each concept has it's progress
        return $this->hasMany(ConceptProgress::class);
    }
}
