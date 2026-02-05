<?php

// package path
namespace App\Models;

// path to Model Class
use Illuminate\Database\Eloquent\Model;

// path to Concept Class..
use App\Models\Concept;

// UDC ConceptContent inherits from Model Class..
class ConceptContent extends Model
{
    // () -> get concept..
    public function concept()
    {
        // content belongs to concept..
        return $this->belongsTo(Concept::class);
    }
}
