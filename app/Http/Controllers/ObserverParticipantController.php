<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObserverParticipantController extends Controller
{
    function showParticipantsTable(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $participants = $user->participants()->get();
        return view('/observer/index')->with(compact('participants'));
    }

    // function showAddParticipant(){}

    // function addParticipant(){}

    // function deleteParticipant(){}
}
