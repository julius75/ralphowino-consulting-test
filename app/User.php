<?php

namespace App;

use Hootlex\Friendships\Traits\Friendable;
use Illuminate\Notifications\Notifiable;
use App\Profile;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable
{
    use Notifiable;
//    use Friendable;
//    use Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function user(){

        //profile belong to one user only
        return $this->belongsTo('App\User');
    }
}
