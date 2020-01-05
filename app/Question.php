<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $fillable = ['session','question','answer_key','option_a','option_b','option_c','option_d'];
}
