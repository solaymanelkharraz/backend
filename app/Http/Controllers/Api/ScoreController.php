<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'player_name' => 'required|string',
            'score' => 'required|integer',
            'total_questions' => 'required|integer',
        ]);

        $score = Score::create($request->all());

        return response()->json(['message' => 'Score saved successfully!', 'data' => $score]);
    }
    public function index()
    {
        // Gets all scores, highest score first
        return response()->json(Score::orderBy('score', 'desc')->get());
    }
}