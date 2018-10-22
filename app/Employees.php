<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //
    protected $table = 'employees';
    protected $primaryKey ='employeeid';
    protected $fillable = ['username','password','department','telephone','email'];
/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
 */
    protected $hidden = [
        'password',
    ];

    public function meetings()
    {
        return $this->hasOne('App\Meetings', 'meeting_id');
    }
}
