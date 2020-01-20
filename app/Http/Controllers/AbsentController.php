<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;

class AbsentController extends Controller
{
    function participantsTable(){
        $participants = Participant::all();
        return view('/absent/table', ['participants' => $participants]);
    }

}
