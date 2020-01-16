<?php

namespace App\Http\Controllers;

use App\Question;
use App\CurrentStatus;
use App\Participant;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function showQuestionTable(){
        $statistics = Question::sortable()->paginate(10);
        return view('/public/soal')->with(compact('statistics'));
    }

    function showPeserta(){
        $statistics = Participant::sortable()->paginate(2);
        return view('/public/peserta')->with(compact('statistics'));
    }

    function showQuestion(){
        $status = CurrentStatus::first();
        $question = Question::where('id', $status->question)->first();
        return view('/public/lihat-soal')->with(compact('question'));
    }
}
