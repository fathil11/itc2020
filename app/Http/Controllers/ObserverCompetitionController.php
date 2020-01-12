<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObserverCompetitionController extends Controller
{
    function showAnswer(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $participants = $user->participants()->get();
        return view('/observer/competition/answer')->with(compact('participants'));
    }

    function answer(){}
}
