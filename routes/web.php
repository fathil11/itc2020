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

// // Admin Routes
// Route::group(['prefix' => 'admin'], function(){
//     // Participant
//     Route::group(['prefix' => 'participant'], function(){
//         // Table
//         Route::get('table', '');
        
//         // Add
//         Route::get('add', '');
//         Route::post('add', '');
        
//         // Update
//         Route::get('update', '');
//         Route::post('update', '');
        
//         // Delete
//         Route::delete('delete', '');
//     });
    
//     // Question
//     Route::group(['prefix' => 'question'], function(){
//         // Table
//         Route::get('table', '');
        
//         // Add
//         Route::get('add', '');
//         Route::post('add', '');
        
//         // Update
//         Route::get('update', '');
//         Route::post('update', '');
        
//         // Delete
//         Route::delete('delete', '');
//     });

//     // Competition
//     Route::group(['prefix' => 'competition'], function(){
//         // Statistic
//         Route::get('statistic', '');
        
//         // Ban
//         Route::get('ban', '');
//         Route::post('ban', '');
        
//         // Session Panel
//         Route::get('session-panel', '');
//             // Next Question
//             Route::get('next-question', '');
//             // Previous Question
//             Route::get('previous-question', '');
//             // Next Session
//             Route::get('next-session', '');
//             // Previous Session
//             Route::get('previous-session', '');
//     });
    
// });


// // Observer Route
// Route::group(['prefix' => 'observer'], function(){
//     // Participant
//     Route::group(['prefix' => 'participant'], function(){
//         // Table
//         Route::get('table', '');
        
//         // Add
//         Route::get('add', '');
//         Route::post('add', '');
        
//         // Delete
//         Route::delete('delete', '');
//     });
    
//     // Competition
//     Route::group(['prefix' => 'competition'], function(){
//         // Answer
//         Route::get('answer', '');
//     });
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
