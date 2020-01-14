<?php

namespace App\Http\Controllers;

use App\Question;
use App\Participant;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function showSoal(){
        $statistics = Question::sortable()->paginate(10);
        return view('/public/soal')->with(compact('statistics'));
    }

    function showPeserta(){
        $statistics = Participant::sortable()->paginate(10);
        return view('/public/peserta')->with(compact('statistics'));
    }
}
