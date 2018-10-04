<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //
    protected $table = 'rooms';
    protected $primaryKey ='room_id';
    protected $fillable = ['room_name','location','capacity','room_description','availability_status'];

}
