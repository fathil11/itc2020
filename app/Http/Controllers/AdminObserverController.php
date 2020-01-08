<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminObserverController extends Controller
{
    ///index
    function showObserversTable(){
        $observers = User::all();
        return view('/admin/observer/table',['observers' => $observers]);
    }

    function showAddObserver(){}

    function addObserver(){}

    function showUpdateObserver($id){}

    function updateObserver($id){}

    function deleteObserver($id){}
}
