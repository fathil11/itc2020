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
Route::group(['prefix' => 'admin'], function(){
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
        
        // Add
        Route::get('add', 'AdminObserverController@showAddObserver');
        Route::post('add', 'AdminObserverController@addObserver');
        
        // Update
        Route::get('update/{id}', 'AdminObserverController@showUpdateObserver');
        Route::post('update/{id}', 'AdminObserverController@updateObserver');
        
        // Delete
        Route::delete('delete/{id}', 'AdminObserverController@deleteObserver');
    });

    // Competition
    Route::group(['prefix' => 'competition'], function(){
        // Statistic
        Route::get('statistic', 'AdminCompetitionController@showStatisticTable');
        
        // Ban
        Route::get('ban/{id}', 'AdminCompetitionController@showBan');
        Route::post('ban/{id}', 'AdminCompetitionController@ban');
        
        // Session Panel
        Route::get('session-panel', 'AdminCompetitionController@showSessionPanel');
            // Next Question
            Route::get('next-question', 'AdminCompetitionController@nextQuestion');
            // Previous Question
            Route::get('previous-question', 'AdminCompetitionController@previousQuestion');
            // Next Session
            Route::get('next-session', 'AdminCompetitionController@nextSession');
            // Previous Session
            Route::get('previous-session', 'AdminCompetitionController@previousSession');
    });
});


// Observer Route
Route::group(['prefix' => 'observer'], function(){
    // Participant
    Route::group(['prefix' => 'participant'], function(){
        // Table
        Route::get('table', 'ObserverParticipantController@showParticipantsTable');
        
        // Add
        Route::get('add', 'ObserverParticipantController@showAddParticipant');
        Route::post('add', 'ObserverParticipantController@addParticipant');
        
        // Delete
        Route::delete('delete', 'ObserverParticipantController@deleteParticipant');
    });
    
    // Competition
    Route::group(['prefix' => 'competition'], function(){
        // Answer
        Route::get('answer', 'ObserverCompetitionController@showAnswer');
        Route::post('answer', 'ObserverCompetitionController@answer');
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

Route::get('/admin/question', function () {
    return view('admin.question.index');
});
