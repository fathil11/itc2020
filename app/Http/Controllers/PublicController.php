<?php

namespace App\Http\Controllers;

use App\Question;
use App\CurrentStatus;
use App\Participant;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function showPeserta(){
        $current = CurrentStatus::first();
        $statistics = Participant::sortable()->paginate(100);
        return view('/public/peserta')->with(compact('statistics', 'current'));
    }

    function showQuestion(){
        $status = CurrentStatus::first();
        $question = Question::where('id', $status->question)->first();
        return view('/public/lihat-soal')->with(compact('question'));
    }
}
