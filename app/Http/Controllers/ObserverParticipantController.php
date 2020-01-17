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
    function getUserDetail(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $nim = substr($user->email, 0, 12);
        $nim[0] = 'A';
        $nim =  substr_replace($nim, '.', 3, 0);
        $nim =  substr_replace($nim, '.', 8, 0);

        $year =  substr($nim, 4, 4);

        $user = User::find($id);

        $detail[0] = $nim;
        $detail[1] = $year;
        $detail[2] = $user;

        return $detail;
    }

    function checkStatus(){
        $status = CurrentStatus::first();
        $id = Auth::user()->id;
        $user = User::find($id);
        $watchs = ObserverParticipant::where('observer_id', $id)->where('session', $status->session)->get();

        if($watchs->isEmpty()){
            return true;
        }else{
            return false;
        }
    }

    function gotoAnswer(){
        $detail = $this->getUserDetail();
        return view('observer.competition.index')->with(compact('detail'));
    }


    function showCreate(){
        $cur_status = CurrentStatus::first();
        $status = $this->checkStatus();
        $detail = $this->getUserDetail();
        if ($status){
            return view('observer.participant.create')->with(compact('cur_status', 'status', 'detail'));
        }else{
            return redirect('/observer')->with(['status' => '2']);
        }

    }

    function create(Request $request){
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
        return redirect(url('observer'));
    }

    function participantsTable(){
        $detail = $this->getUserDetail();
        $id = Auth::user()->id;
        $user = User::find($id);
        $status = CurrentStatus::first();
        $watchs = ObserverParticipant::where('observer_id', $user->id)->where('session', $status->session)->get();
        $participants = array();
        foreach ($watchs as $watch) {
            $participantss = Participant::where('id', $watch->participant_id)->get();
            $participants = array_merge($participants, array_flatten($participantss));
        }

        return view('observer.participant.table')->with(compact('participants', 'detail'));
    }

}
