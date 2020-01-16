<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObserverParticipant extends Model
{
    protected $table = "observer_participants";
    protected $fillable = ['observer_id','participant_id','session'];
}
