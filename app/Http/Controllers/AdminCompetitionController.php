<?php

namespace App\Http\Controllers;

use App\Question;
use App\Participant;
use App\CurrentStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCompetitionController extends Controller
{
    function adminPanel(){
        $question = Question::first();
        return view('admin.index')->with(compact('question'));
    }

    function showStatisticTable(){
        $participants = Participant::all();
        return view('/admin/competition/statistic')->with(compact('participants'));
    }

    function showBan($id){}

    function ban($id){}

    function showQuestion($id){
        $question = Question::where('id', $id)->firstOrFail();
        
        $previous = Question::where('id', '<', $question->id)->orderBy('id','desc')->first();
        
        $next = Question::where('id', '>', $question->id)->orderBy('id')->first();
        
        return view('/admin/competition/question')->with(compact('question','previous','next'));
    }
    
    function updateStatusInc($id, Participant $participant){
        $user = Participant::where('id', $id)->first();
        Participant::where('id', $id)
        ->update([
            'status' => $user->status+1
            ]);
            return back();
        }
        
    function updateStatusDec($id, Participant $participant){
        $user = Participant::where('id', $id)->first();
        Participant::where('id', $id)
        ->update([
            'status' => $user->status-1
            ]);
            return back();
        }

    function showSessionPanel(){
        $status = CurrentStatus::first();
        return view('/admin/competition/session-panel')->with(compact('status'));
    }

    function sessionPanel(){
        CurrentStatus::create([
            'session' => 1,
            'question' =>1
        ]);

        return redirect('/admin/competition/session-panel');
    }

    function updateSessionPanel(Request $request){
        $status = CurrentStatus::first();
        $request->validate([
            'session' => 'required|numeric',
            'question' => 'required|numeric'
            ]);

        CurrentStatus::where('id', $status->id)
                ->update([
                    'session' => $request->session,
                    'question' => $request->question
                ]);
        return redirect('/admin/competition/session-panel')->with('status', 'Data Berhasil Diubah');
    }
            
    function nextQuestion(){
    }

    function previousQuestion(){

    }

    function nextSession(){

    }

    function previousSession(){

    }
}
