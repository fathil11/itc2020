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

    use App\Question;
    use App\User;
    
// Admin Routes
Route::group(['middleware' => ['admin','auth'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminCompetitionController@adminPanel');
    
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
        
        // Question
        Route::get('question/{id}', 'AdminCompetitionController@showQuestion');
        // Session Panel
        Route::get('session-panel', 'AdminCompetitionController@showSessionPanel');
        Route::put('session-panel', 'AdminCompetitionController@sessionPanel');
        Route::patch('session-panel', 'AdminCompetitionController@updateSessionPanel');
        // // Next Session
        // Route::post('next-session', 'AdminCompetitionController@nextSession');
        // // Previous Session
        // Route::get('previous-session', 'AdminCompetitionController@previousSession');
        // // Next Session
        // Route::get('next-question', 'AdminCompetitionController@nextQuestion');
        // // Previous Session
        // Route::get('previous-question', 'AdminCompetitionController@previousQuestion');
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
        
    Route::get('/', 'ObserverParticipantController@showParticipantsTable');
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
Route::get('/soal', 'PublicController@showSoal')->middleware('auth');
Route::get('/peserta', 'PublicController@showPeserta')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function(){
    return view('welcome');
});

Route::get('/participant', 'ParticipantCompetitionController@show')->middleware(['finale','auth']);
Route::get('/participant/final/{question}', 'ParticipantCompetitionController@finale')->middleware(['finale','auth']);
Route::patch('/participant/final/{question}', 'ParticipantCompetitionController@finaleSubmit')->middleware(['finale','auth']);