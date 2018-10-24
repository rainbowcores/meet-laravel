<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //
    protected $table = 'equipment';
    protected $primaryKey ='equipment_id';
    protected $fillable = ['equipment_name','description','availability_status'];
    public $timestamps = false;

}
