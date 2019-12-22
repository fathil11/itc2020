<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminParticipantController extends Controller
{
    //index
    function showParticipantsTable(){
        $participants = Participant::all();
        return view('/admin/participant/table', ['participants' => $participants]);
    }

    //create
    function showAddParticipant(){
        return view('/admin/participant/add');
    }

    //store
    function addParticipant(Request $request){
        $request->validate([
            'name' => 'required',
            'school' => 'required'
        ]);

        Question::create([
            'name' => $request->name, 
            'school' => $request->school,
            'absent' => now(),
            'point_1' => 0,
            'point_2' => 'point_1',
            'point_3' => 20,
            'point_4' => 0,
            'status' => 0
        ]);

        return redirect ('/admin/participant/table')->with('status', 'Data Berhasil Ditambahkan');
    }

    //edit
    function showUpdateParticipant(Participant $participant){
        return view('/admin/participant/edit', ['participant' => $participant]);
    }

    //update
    function updateParticipant(Request $request, Participant $participant){
        $request->validate([
            'name' => 'required',
            'school' => 'required'
        ]);

        Question::where('id', $question->id)
                ->update([
                    'name' => $request->name, 
                    'school' => $request->school,
                    'absent' => now(),
                    'point_1' => 0,
                    'point_2' => 'point_1',
                    'point_3' => 20,
                    'point_4' => 0,
                    'status' => 0
                ]);
        return redirect ('/admin/participant/table')->with('status', 'Data Berhasil Diubah');
    }

    //destroy
    function deleteParticipant(Participant $participant){
        Question::destroy($participant->id);
        return redirect ('/admin/participant/table')->with('status', 'Data Berhasil Dihapus');
    }
}
