<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['scenario', 'option_a', 'option_b', 'correct_answer', 'feedback'];
}
