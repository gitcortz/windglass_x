<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSheet extends Model
{
    protected $fillable = ['time_in', 'time_out'];

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
