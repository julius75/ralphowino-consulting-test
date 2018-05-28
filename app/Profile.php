<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'about','user_id',
    ];

    //relationship btn profile and user



    public function profile(){

        //user has one profile
        return $this->hasOne('App\Profile');
    }
}
