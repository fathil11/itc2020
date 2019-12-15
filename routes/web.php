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
        Route::get('table', 'AdminController@showParticipantsTable');
        
        // Add
        Route::get('add', 'AdminController@showAddParticipant');
        Route::post('add', 'AdminController@addparticipant');
        
        // Update
        Route::get('update/{id}', 'AdminController@showUpdateParticipant');
        Route::post('update/{id}', 'AdminController@showParticipantsTable');
        
        // Delete
        Route::delete('delete/{id}', 'AdminController@deleteParticipant');
    });
    
    // Question
    Route::group(['prefix' => 'question'], function(){
        // Table
        Route::get('table', 'AdminController@showQuestions');
        
        // Add
        Route::get('add', 'AdminController@showAddQuestion');
        Route::post('add', 'AdminController@addQuestion');
        
        // Update
        Route::get('update{id}', 'AdminController@showUpdateQuestion');
        Route::post('update{id}', 'AdminController@updateQuestion');
        
        // Delete
        Route::delete('delete/{id}', 'AdminController@deleteQuestion');
    });
    
    // Observer
    Route::group(['prefix' => 'observer'], function(){
        // Table
        Route::get('table', 'AdminController@showObserversTable');
        
        // Add
        Route::get('add', 'AdminController@showAddObserver');
        Route::post('add', 'AdminController@addObserver');
        
        // Update
        Route::get('update/{id}', 'AdminController@showUpdateObserver');
        Route::post('update/{id}', 'AdminController@updateObserver');
        
        // Delete
        Route::delete('delete/{id}', 'AdminController@deleteObserver');
    });

    // Competition
    Route::group(['prefix' => 'competition'], function(){
        // Statistic
        Route::get('statistic', 'AdminController@showStatistic');
        
        // Ban
        Route::get('ban/{id}', 'AdminController@showBan');
        Route::post('ban/{id}', 'AdminController@ban');
        
        // Session Panel
        Route::get('session-panel', 'AdminController@showSessionPanel');
            // Next Question
            Route::get('next-question', 'AdminController@nextQuestion');
            // Previous Question
            Route::get('previous-question', 'AdminController@previousQuestion');
            // Next Session
            Route::get('next-session', 'AdminController@nextSession');
            // Previous Session
            Route::get('previous-session', 'AdminController@previousSession');
    });
});


// Observer Route
Route::group(['prefix' => 'observer'], function(){
    // Participant
    Route::group(['prefix' => 'participant'], function(){
        // Table
        Route::get('table', 'ObserverController@showParticipantsTable');
        
        // Add
        Route::get('add', 'ObserverController@showAddParticipant');
        Route::post('add', 'ObserverController@addParticipant');
        
        // Delete
        Route::delete('delete', 'ObserverController@deleteParticipant');
    });
    
    // Competition
    Route::group(['prefix' => 'competition'], function(){
        // Answer
        Route::get('answer', 'ObserverController@showAnswer');
        Route::post('answer', 'ObserverController@answer');
    });
});

// Public Route
Route::get('/soal', 'PublicController@showSoal');
Route::get('/peserta', 'ObserverController@showPeserta');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
