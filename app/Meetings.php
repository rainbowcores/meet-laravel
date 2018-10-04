<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
    //
    protected $table = 'meetings';
    protected $primaryKey ='meeting_id';
    protected $fillable = ['start_time','end_time'];

}
