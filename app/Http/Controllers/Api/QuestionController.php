<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        // This grabs all questions and sends them as JSON
        return response()->json(Question::all());
    }
}