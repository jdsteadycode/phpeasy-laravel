<?php

// package path.
namespace App\Models;

// path to Model class.
use Illuminate\Database\Eloquent\Model;

// path to Problem class.
use App\Models\Problem;

// path to User class.
use App\Models\User;

// UDC Submission inherits Model Class.
class Submission extends Model
{
    // columns to be filled
    protected $fillable = [
        'code',
        'execution_status',
        'user_id',
        'problem_id'
    ];

    // () -> related problem.
    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }

    // () -> related user.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
