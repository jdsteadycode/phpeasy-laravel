<?php

// package path.
namespace App\Models;

// path to Model class.
use Illuminate\Database\Eloquent\Model;

// path to Concept Class.
use App\Models\Concept;

// UDC ConceptProgress inherits Model Class.
class ConceptProgress extends Model
{
    // columns to be filled..
    protected $fillable = [
        'status',
        'user_id',
        'concept_id'
    ];

    // () -> related concept.
    public function concept()
    {
        return $this->belongsTo(Concept::class);
    }

    // () -> related user.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
