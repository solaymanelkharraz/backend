<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['player_name', 'score', 'total_questions', 'time_taken'];
}
