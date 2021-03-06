<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //
    protected $table = 'rooms';
    protected $primaryKey ='room_id';
    protected $fillable = ['room_name','location','capacity','room_description','availability_status'];
    public $timestamps = false;
    
    public function meetings()
    {
        return $this->hasMany('App\Meetings','meeting_id');
    }
    public function rooms_Equipment()
    {
        return $this->belongsTo('App\rooms_Equipment', 'roomequipment_id');
    }
    
}
