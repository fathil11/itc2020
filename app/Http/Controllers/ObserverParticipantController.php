<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\CurrentStatus;
use App\Participant;
use App\ObserverParticipant;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObserverParticipantController extends Controller
{
    function showParticipantsTable(){
        $status = CurrentStatus::first();
        $id = Auth::user()->id;
        $user = User::find($id);
        $watchs = ObserverParticipant::where('observer_id', $user->id)->where('session', $status->session)->get();
        $participants = array();
        foreach ($watchs as $watch) {
            $participantss = Participant::where('id', $watch->participant_id)->get();
            $participants = array_merge($participants, array_flatten($participantss));
        }
        if ($participants == null)
        {
            return view('/observer/index')->with(compact('status'));
        }
        return redirect('/observer/table')->with(compact('participants'));
    }

    function participants(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
        $status = CurrentStatus::first();

        $watchString = $request->participants_id;
        $watchs = explode(",", $watchString);
        foreach ($watchs as $watch) {
            # code...
            ObserverParticipant::create([
                'observer_id' => $user->id,
                'participant_id' => $watch,
                'session' => $status->session
            ]);
        }
        return redirect('/observer/table');
    }

    function participantsTable(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $status = CurrentStatus::first();
        $watchs = ObserverParticipant::where('observer_id', $user->id)->where('session', $status->session)->get();
        $participants = array();
        foreach ($watchs as $watch) {
            $participantss = Participant::where('id', $watch->participant_id)->get();
            $participants = array_merge($participants, array_flatten($participantss));
        }
        return view('/observer/table')->with(compact('participants'));
    }

    // function showAddParticipant(){}

    // function addParticipant(){}

    // function deleteParticipant(){}
}
