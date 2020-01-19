<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionLog extends Model
{
    protected $table = "transaction_logs";
    protected $fillable = ['user_id', 'participant_id', 'question_id', 'answer', 'calc'];
}
