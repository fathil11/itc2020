<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Participant;
use App\CurrentStatus;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantCompetitionController extends Controller
{
    public function show(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $question = Question::where('session', '3')->first();
        $participant = $user->participants()->first();
        return view('/participant/index')->with(compact('participant','question'));
    }

    public function finale(Question $question){
        $id = Auth::user()->id;
        $user = User::find($id);
        $status = CurrentStatus::first();
        $question = Question::where('id', $status->question)->first();
        $participant = $user->participants()->first();
        return view('participant.final', ['question' => $question])->with(compact('participant','question'));
    }

    public function finaleSubmit(Request $request){
        $request->validate([
            'bet' => 'required',
            'answer' => 'required'
        ]);
        $id = Auth::user()->id;
        $user = User::find($id);
        $status = CurrentStatus::first();
        $question = Question::where('id', $status->question)->first();
        $participant = $user->participants()->first();
        if ($request->bet >=0 && $request->bet/$participant->point_3 <= 0.5)
        {
            if ($request->answer == $question->answer_key)
            {
                Participant::where('id', $participant->id)
                ->update([
                    'point_3' => $participant->point_3+$request->bet
                ]);
                return redirect('/participant')->with('status-true', 'Jawaban Benar');
            }
            else
            {
                Participant::where('id', $participant->id)
                ->update([
                    'point_3' => $participant->point_3-$request->bet
                ]);
                return redirect('/participant')->with('status-false', 'Jawaban Salah');
            }
        }
        else
        {
            return back()->with('counter', 'Taruhan tidak valid');
        }
        
    }
}
