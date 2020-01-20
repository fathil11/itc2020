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

    function absent(Participant $participant){
        Participant::where('id', $participant->id)
            ->update([
                'absent' => now()->addHours(7)
            ]);
        return redirect ('/absent')->with('status', 'Hadir');
    }

    function absentCancel(Participant $participant){
        Participant::where('id', $participant->id)
            ->update([
                'absent' => null
            ]);
        return redirect ('/absent')->with('status', 'Batalkan Hadir');
    }
}
