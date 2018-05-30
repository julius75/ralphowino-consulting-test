<?php

namespace App\Http\Controllers;
use Illuminate\Auth;


use Illuminate\Http\Request;

class FriendshipController extends Controller
{
    //
//    public function befriend($id){
//        //check details of the user and what profile info is viewing
//        if(Auth::user()->is_friends_with($id) === 1){
//            return ["confirm","friends"];
//
//        }
//
//        if(Auth::user()->has_pending_friend_request_from($id)){
//            return ["confirm","pending"];
//        }
//
//        if(Auth::user()->has_pending_friend_request_to($id)){
//            return ["confirm","waiting"];
//        }
//
//        return ["confirm", 0];
//
//    }
//
//
//
//    public function add_friend($id){
//        return Auth::user()->add_friend($id);
//    }
//}

}