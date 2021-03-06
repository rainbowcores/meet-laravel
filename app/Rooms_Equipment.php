<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms_Equipment extends Model
{
    //
    protected $table = 'roomequipment';
    protected $primaryKey ='roomequipment_id';
    protected $fillable = ['equipment_id','room_id'];
    public $timestamps = false;
    public function rooms()
    {
        return $this->hasMany('App\Rooms', 'room_id');
    
    }
    public function equipment()
    {
        return $this->hasMany('App\Equipment', 'equipment_id');
    }
}
