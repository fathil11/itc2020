<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminQuestionController extends Controller
{
    ///index
    //function showQuestionsTable(){}
    public function showQuestionsTable(){
        $questions = Question::all();
        return view('/admin/question/table', ['questions' => $questions]);
    }

    ///create
    //function showAddQuestion(){}
    public function showAddQuestion(){
        return view('/admin/question/add');
    }

    ///store
    //function addQuestion(){}
    public function addQuestion(Request $request){
        $request->validate([
            'session' => 'required',
            'question' => 'required',
            'answer_key' => 'required|size:1'
        ]);

        Question::create($request->all());
        return redirect ('/admin/question/table')->with('status', 'Data Berhasil Ditambahkan');
    }

    public function showQuestion(Question $question){
        return view('/admin/question/show', ['question' => $question]);
    }

    ///edit
    //function showUpdateQuestion($id){}
    public function showUpdateQuestion(Question $question){
        return view('/admin/question/edit', ['question' => $question]);
    }

    ///update
    //function updateQuestion($id){}
    public function updateQuestion(Request $request, Question $question){
        $request->validate([
            'session' => 'required',
            'question' => 'required',
            'answer_key' => 'required|size:1'
        ]);

        Question::where('id', $question->id)
                ->update([
                    'session' => $request->session,
                    'question' => $request->question,
                    'answer_key' => $request->answer_key,
                    'option_a' => $request->option_a,
                    'option_b' => $request->option_b,
                    'option_c' => $request->option_c,
                    'option_d' => $request->option_d
                ]);
        return redirect ('/admin/question/table')->with('status', 'Data Berhasil Diubah');
    }

    ///destroy
    //function deleteQuestion($id){}
    public function deleteQuestion(Question $question){
        Question::destroy($question->id);
        return redirect ('/admin/question/table')->with('status', 'Data Berhasil Dihapus');
    }
}
