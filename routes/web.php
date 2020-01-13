<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin Routes
Route::group(['middleware' => ['admin','auth'], 'prefix' => 'admin'], function(){
    // Participant
    Route::group(['prefix' => 'participant'], function(){
        // Table
        Route::get('table', 'AdminParticipantController@showParticipantsTable');
        
        // Add
        Route::get('add', 'AdminParticipantController@showAddParticipant');
        Route::post('table', 'AdminParticipantController@addParticipant');
        
        // Update
        Route::post('{participant}/edit', 'AdminParticipantController@showUpdateParticipant');
        Route::patch('table/{participant}', 'AdminParticipantController@updateParticipant');
        
        // Delete
        Route::delete('table/{participant}', 'AdminParticipantController@deleteParticipant');
    });
    
    // Question
    Route::group(['prefix' => 'question'], function(){
        // Table
        Route::get('table', 'AdminQuestionController@showQuestionsTable');
        Route::get('table/{question}', 'AdminQuestionController@showQuestion');
        
        // Add
        Route::get('add', 'AdminQuestionController@showAddQuestion');
        Route::post('table', 'AdminQuestionController@addQuestion');
        
        // Update
        Route::post('{question}/edit', 'AdminQuestionController@showUpdateQuestion');
        Route::patch('table/{question}', 'AdminQuestionController@updateQuestion');
        
        // Delete
        Route::delete('table/{question}', 'AdminQuestionController@deleteQuestion');
    });
    
    // Observer
    Route::group(['prefix' => 'observer'], function(){
        // Table
        Route::get('table', 'AdminObserverController@showObserversTable');
        
        // // Add
        // Route::get('add', 'AdminObserverController@showAddObserver');
        // Route::post('add', 'AdminObserverController@addObserver');
        
        // // Update
        // Route::get('update/{user}', 'AdminObserverController@showUpdateObserver');
        // Route::post('update/{user}', 'AdminObserverController@updateObserver');
        
        // Delete
        Route::delete('table/{user}', 'AdminObserverController@deleteObserver');
    });

    // Competition
    Route::group(['prefix' => 'competition'], function(){
        // Statistic
        Route::get('statistic', 'AdminCompetitionController@showStatisticTable');
        Route::put('statistic/{id}', 'AdminCompetitionController@updateStatusInc');
        Route::patch('statistic/{id}', 'AdminCompetitionController@updateStatusDec');
        
        // Ban
        // Route::get('ban/{id}', 'AdminCompetitionController@showBan');
        // Route::post('ban/{id}', 'AdminCompetitionController@ban');
        
        // Session Panel
        // Route::get('session-panel', 'AdminCompetitionController@showSessionPanel');
        // Question
        Route::get('question/{id}', 'AdminCompetitionController@showQuestion');
        // Next Session
        // Route::get('next-session', 'AdminCompetitionController@nextSession');
        // Previous Session
        // Route::get('previous-session', 'AdminCompetitionController@previousSession');
    });
});


// Observer Route
Route::group(['middleware' => ['auth','observer'], 'prefix' => 'observer'], function(){
    // Participant
    // Route::group(['prefix' => 'participant'], function(){
    //     // Table
    //     Route::get('table', 'ObserverParticipantController@showParticipantsTable');
        
    //     // Add
    //     Route::get('add', 'ObserverParticipantController@showAddParticipant');
    //     Route::post('add', 'ObserverParticipantController@addParticipant');
        
    Route::get('/', 'ObserverParticipantController@showParticipantsTable')->middleware(['auth']);
    //     // Delete
    //     Route::delete('delete', 'ObserverParticipantController@deleteParticipant');
    // });
    // Route::get('/', 'ObserverParticipantController@showParticipantsTable');
    // Competition
    Route::group(['prefix' => 'competition'], function(){
        // Answer
        Route::get('answer/{question}', 'ObserverCompetitionController@showAnswer');
        Route::patch('answer/{question}', 'ObserverCompetitionController@answer');
    });
});

// Public Route
Route::get('/soal', 'PublicController@showSoal');
Route::get('/peserta', 'PublicController@showPeserta');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function(){
    return view('welcome');
});

use App\Question;
use App\User;

Route::get('/admin', function () {
    $question = Question::first();
    return view('admin.index')->with(compact('question'));
})->middleware(['admin','auth']);

Route::get('/participant', function () {
    return view('participant.index');
})->middleware(['finale','auth']);
