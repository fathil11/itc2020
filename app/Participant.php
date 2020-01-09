<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Participant extends Model
{
    use Sortable;
    
    protected $table = "participants";
    protected $fillable= ['name', 'school','absent','point_1','point_2','point_3','point_4','status'];
}
