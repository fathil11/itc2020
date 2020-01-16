<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentStatus extends Model
{
    protected $table = "curent_status";
    protected $fillable = ['session','question'];
}
