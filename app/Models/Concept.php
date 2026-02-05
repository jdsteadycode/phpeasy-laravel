<?php

// package path
namespace App\Models;

// path to Model Class
use Illuminate\Database\Eloquent\Model;

// path to ConceptContent Class
use App\Models\ConceptContent;

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
}
