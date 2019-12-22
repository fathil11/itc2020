<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = "participants";
    protected $fillable= ['name', 'school','absent','point_1','point_2','point_3','point_4','status'];
}
