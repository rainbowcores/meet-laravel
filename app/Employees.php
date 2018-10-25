<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Employees extends \Eloquent implements Authenticatable
{
    //
    use AuthenticableTrait;

    protected $table = 'employees';
    protected $primaryKey ='employeeid';
    protected $fillable = ['username','password','type','department','telephone','email'];
    public $timestamps = false;

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
