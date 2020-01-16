<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Participant;
use App\ObserverParticipant;
use App\Question;
use App\CurrentStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObserverCompetitionController extends Controller
{
    function showAnswer(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $status = CurrentStatus::first();
        $question = Question::where('id', $status->question)->first();
        $watchs = ObserverParticipant::where('observer_id', $user->id)->where('session', $status->session)->get();
        $participants = array();
        foreach ($watchs as $watch) {
            $participantss = Participant::where('id', $watch->participant_id)->get();
            $participants = array_merge($participants, array_flatten($participantss));
        }
        return view('/observer/competition/answer', ['question' => $question])->with(compact('participants','question'));
    }

    function answer(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
        $status = CurrentStatus::first();
        $question = Question::where('id', $status->question)->first();
        $watchs = ObserverParticipant::where('observer_id', $user->id)->where('session', $status->session)->get();
        $participants = array();
        foreach ($watchs as $watch) {
            $participantss = Participant::where('id', $watch->participant_id)->get();
            $participants = array_merge($participants, array_flatten($participantss));
        }
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
            elseif ($question->session == 4 && $participant->status == 4)
            {
                Participant::where('id', $participant->id)
                ->update([
                    'point_4' => $participant->point_4+$request->answer[$participant->id]
                ]);
            }
        }
        return redirect('/observer/competition/answer/')->with('status', 'Jawaban Berhasil Diinput');
    }

    function showUpdateParticipant(Participant $participant){
        return view('/observer/edit', ['participant' => $participant]);
    }

    function updateParticipant(Request $request, Participant $participant){
        $request->validate([
            'name' => 'required',
            'school' => 'required'
        ]);

        Participant::where('id', $participant->id)
                ->update([
                    'name' => $request->name,
                    'school' => $request->school
                ]);
        return redirect ('/observer/table')->with('status', 'Data Berhasil Diubah');
    }

    function deleteParticipant(Participant $participant){
        Participant::destroy($participant->id);
        return redirect ('/observer/table')->with('status', 'Data Berhasil Dihapus');
    }
}
