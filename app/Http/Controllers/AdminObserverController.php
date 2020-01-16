<?php

namespace App\Http\Controllers;

use App\User;
use App\ObserverParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminObserverController extends Controller
{
    ///index
    function showObserversTable(User $user){
        $observers = User::all();
        return view('/admin/observer/table')->with(compact('observers'));
    }

    // function showAddObserver(){}

    // function addObserver(){}

    // function showUpdateObserver($id){}

    // function updateObserver($id){}

    //destroy
    function deleteObserver(User $user){
        User::destroy($user->id);
        return redirect('/admin/observer/table')->with('status', 'Data Berhasil Dihapus');
    }
}
