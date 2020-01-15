<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Participant;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantCompetitionController extends Controller
{
    public function show(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $question = Question::where('session', '3')->first();
        $participants = $user->participants()->get();
        return view('/participant/index')->with(compact('participants','question'));
    }

    public function finale(Question $question){
        $id = Auth::user()->id;
        $user = User::find($id);
        $participant = $user->participants()->first();
        return view('participant.final', ['question' => $question])->with(compact('participant'));
    }

    public function finaleSubmit(Request $request, Question $question){
        $request->validate([
            'bet' => 'required',
            'answer' => 'required'
        ]);
        $id = Auth::user()->id;
        $user = User::find($id);
        $participant = $user->participants()->first();
        if ($request->bet >=0 && $request->bet/$participant->point_3 <= 0.5)
        {
            if ($request->answer == $question->answer_key)
            {
                Participant::where('id', $participant->id)
                ->update([
                    'point_3' => $participant->point_3+$request->bet
                ]);
                $next = Question::where('id', '>', $question->id)->orderBy('id')->first();
                return redirect('/participant/final/'.$next->id)->with('status-true', 'Jawaban Benar');
            }
            else
            {
                Participant::where('id', $participant->id)
                ->update([
                    'point_3' => $participant->point_3-$request->bet
                ]);
                $next = Question::where('id', '>', $question->id)->orderBy('id')->first();
                return redirect('/participant/final/'.$next->id)->with('status-false', 'Jawaban Salah');
            }
        }
        else
        {
            return back()->with('counter', 'Taruhan tidak valid');
        }
        
    }
}
