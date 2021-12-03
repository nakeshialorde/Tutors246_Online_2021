<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;

class QuizController extends Controller
{
    public function quiz()
    {
    return view('quiz');
    }

public function quizSaveData(Request $request)
{
    $this->validate($request, [
        'quizname' => 'required',
        'name' => 'required',
        'grade' => 'required'
    ]);
        
Quiz::create($request->all());
    return back()->with('success', 'Your quiz has been submitted');
}
    
}
