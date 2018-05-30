<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function check($id){
//      is they are friends return

        if(Auth::user()->isFriendWith($id) === 1){
            return ["status","friends"];

        }

        if(Auth::user()->hasFriendRequestFrom($id)){
            return ["status","pending"];
        }

        if(Auth::user()->hasSentFriendRequestTo($id)){
            return ["status","waiting"];
        }

        return ["status", 0];

    }

}
