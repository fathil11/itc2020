<?php

namespace App\Http\Controllers;

use App\Question;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCompetitionController extends Controller
{
    function showStatisticTable(){
        $statistics =Participant::sortable()->paginate(10);
        return view('/admin/competition/statistic')->with(compact('statistics'));
    }

    function showBan($id){}

    function ban($id){}

    function showSessionPanel(){}

    // function nextQuestion(){}
    // function previousQuestion(){}
    function showQuestion($id){
        $question = Question::where('id', $id)->firstOrFail();

        $previous = Question::where('id', '<', $question->id)->orderBy('id','desc')->first();

        $next = Question::where('id', '>', $question->id)->orderBy('id')->first();

        return view('/admin/competition/question')->with(compact('question','previous','next'));
    }

    // function nextSession(){}
    // function previousSession(){}
}
