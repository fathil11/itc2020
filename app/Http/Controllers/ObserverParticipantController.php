<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\CurrentStatus;
use App\ObserverParticipant;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObserverParticipantController extends Controller
{
    function showParticipantsTable(){
        $status = CurrentStatus::first();
        return view('/observer/index')->with(compact('status'));
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
                'parcipant_id' => $watch,
                'session' => $status->session
            ]);
        }
        return redirect('/observer');
    }

    function participantsTable(){
        return view('/observer/table');
    }

    // function showAddParticipant(){}

    // function addParticipant(){}

    // function deleteParticipant(){}
}
