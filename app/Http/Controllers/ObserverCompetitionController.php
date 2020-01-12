<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Question;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObserverCompetitionController extends Controller
{
    function showAnswer(Question $question){
        $id = Auth::user()->id;
        $user = User::find($id);
        $participants = $user->participants()->get();
        return view('/observer/competition/answer', ['question' => $question])->with(compact('participants'));
    }

    function answer(Request $request, Question $question){
        $id = Auth::user()->id;
        $user = User::find($id);
        $participants = $user->participants()->get();
        foreach ($participants as $participant) {
            # code...
            dump($request->answer[$participant->id]);
        }
        dump($question->id);
        dump($question->answer_key);
            
    }
}
