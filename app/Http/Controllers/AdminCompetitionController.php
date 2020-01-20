<?php

namespace App\Http\Controllers;

use App\Question;
use App\Participant;
use App\CurrentStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCompetitionController extends Controller
{
    // /admin
    function adminPanel(){
        $question = Question::first();
        return view('admin.index')->with(compact('question'));
    }
    //statistik
    function showStatisticTable(){
        $current = CurrentStatus::first();
        $participants = Participant::sortable()->paginate(50);
        return view('/admin/competition/statistic')->with(compact('participants', 'current'));
    }

    // function showBan($id){}

    // function ban($id){}

    //tampil soal
    function showQuestion($id){
        $question = Question::where('id', $id)->firstOrFail();
        
        $previous = Question::where('id', '<', $question->id)->orderBy('id','desc')->first();
        
        $next = Question::where('id', '>', $question->id)->orderBy('id')->first();
        
        return view('/admin/competition/question')->with(compact('question','previous','next'));
    }
    
    //statistik
    function updateStatusInc($id, Participant $participant){
        $user = Participant::where('id', $id)->first();
        Participant::where('id', $id)
        ->update([
            'status' => $user->status+1
            ]);
            return back();
    }
       
    //statistik
    function updateStatusDec($id, Participant $participant){
        $user = Participant::where('id', $id)->first();
        Participant::where('id', $id)
        ->update([
            'status' => $user->status-1
            ]);
            return back();
    }

    //Kick Peserta
    function kickParticipant($id, Participant $participant) {
        $user = Participant::where('id', $id)->first();
        Participant::where('id', $id)
        ->update([
            'status' => -1
            ]);
            return back();
    }

    //panel sesi
    function showSessionPanel(){
        $status = CurrentStatus::first();
        if ($status == null)
        {
            CurrentStatus::create([
                'session' => 1,
                'question' =>1
            ]);
        }
        return view('/admin/competition/session-panel')->with(compact('status'));
    }

    //panel sesi
    // function sessionPanel(){
    //     CurrentStatus::create([
    //         'session' => 1,
    //         'question' =>1
    //     ]);
    //     return redirect('/admin/competition/session-panel');
    // }

    //panel sesi
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
    
    // function nextQuestion(){}

    // function previousQuestion(){}

    // function nextSession(){}

    // function previousSession(){}

    //eliminasiz
    function showEliminate(){
        $status = CurrentStatus::first();
        return view('/admin/competition/elimination')->with(compact('status'));
    }

    //eliminasi
    function eliminate(Request $request){
        $status = CurrentStatus::first();
        if ($status->session == 2) {
            $participants = Participant::where('status', 1)->orderBy('point_1','desc')->get();
        }
        elseif ($status->session == 3) {
            $participants = Participant::where('status', 2)->orderBy('point_2','desc')->get();
        }
        elseif ($status->session == 4) {
            $participants = Participant::where('status', 3)->orderBy('point_3','desc')->get();
        }
        $index = 0;
        while ($index < $request->eliminate) {
            # code...
            if ($status->session == 2) {
                Participant::where('id', $participants[$index]->id)
                        ->update([
                            'status' => $status->session
                        ]);
                $index += 1;
            }
            elseif ($status->session == 3) {
                Participant::where('id', $participants[$index]->id)
                        ->update([
                            'status' => $status->session
                        ]);
                $index += 1;
            }
            elseif ($status->session == 4) {
                Participant::where('id', $participants[$index]->id)
                        ->update([
                            'status' => $status->session
                        ]);
                $index += 1;
            }
        }
        return redirect('/admin/competition/eliminate')->with('status', 'Eliminasi Berhasil');
}

    //eliminasi
    function undoEliminate(){
        $status = CurrentStatus::first();
        $participants = Participant::where('status', $status->session)->get();
        foreach ($participants as $participant) {
            # code...
            Participant::where('id', $participant->id)
                    ->update([
                        'status' => $participant->status-1
                    ]);
        }
        return redirect('/admin/competition/eliminate')->with('status-undo', 'Eliminasi Di-Undo, Silahkan Eliminasi Lagi untuk meloloskan peserta');
    }
}
