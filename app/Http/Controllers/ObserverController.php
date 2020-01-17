<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\CurrentStatus;
use App\Participant;
use App\ObserverParticipant;
use App\Question;

class ObserverController extends Controller
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

    function showHome(Request $request){
        $detail = $this->getUserDetail();
        $status = $this->checkStatus();
        if($status){
            $request->session()->flash('status', '1');
            return view('observer.home')->with(compact('detail'));
        }else{
            return view('observer.home')->with(compact('detail'));
        }
    }
}
