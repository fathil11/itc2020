<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Participant;
use App\Question;
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
            if ($question->session == 1 && $participant->status == 1)
            {
                if($request->answer[$participant->id] == $question->answer_key)
                {
                    Participant::where('id', $participant->id)
                    ->update([
                        'point_1' => $participant->point_1+3
                    ]);
                }
                elseif ($request->answer[$participant->id] == 'Z')
                {
                    Participant::where('id', $participant->id)
                    ->update([
                        'point_1' => $participant->point_1+0
                    ]);
                }
                else
                {
                    Participant::where('id', $participant->id)
                    ->update([
                        'point_1' => $participant->point_1+0
                    ]);
                }
            }
            elseif ($question->session == 2 && $participant->status == 2)
            {
                if($request->answer[$participant->id] == $question->answer_key)
                {
                    Participant::where('id', $participant->id)
                    ->update([
                        'point_2' => $participant->point_2+3
                    ]);
                }
                elseif ($request->answer[$participant->id] == 'Z')
                {
                    Participant::where('id', $participant->id)
                    ->update([
                        'point_2' => $participant->point_2+0
                    ]);
                }
                else
                {
                    Participant::where('id', $participant->id)
                    ->update([
                        'point_2' => $participant->point_2-1
                    ]);
                }
            }

        }

        $next = Question::where('id', '>', $question->id)->orderBy('id')->first();
        return redirect('/observer/competition/answer/'.$next->id);
            
    }
}
