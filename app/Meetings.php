<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
    //
    protected $table = 'meetings';
    protected $primaryKey ='meeting_id';
    protected $fillable = ['start_time','end_time','employeeid','room_id'];
    public $timestamps = false;

    public function employees()
    {
    return $this->belongsTo('App\Employees', 'employeeid');
    }
    public function rooms()
    {
        return $this->belongsTo('App\Rooms', 'room_id');
    }

}
