<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits;

class FriendShip extends Model
{
    //
    protected $fillable = [
        'requesting','user_requested','confirm',
    ];
}
