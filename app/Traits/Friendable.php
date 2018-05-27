<?php

namespace App\Traits;
use App\FriendShip;


trait Friendable
{

    //
    public function add_friend($user_requested_id)  //receive id of user sent the request
    {
        if($this->id == $user_requested_id){

            return 0;
        }

        if($this->has_pending_friend_request_sent_to($user_requested_id) === 1){

            return 'request Already sent';
        }

        if($this->has_pending_friend_request_from($user_requested_id) === 1){

            return $this->accept_friend($user_requested_id);
            }
            //create a new friendship that receives those parameter

       $friend = FriendShip::create([
            'requesting' => $this->id,
            'user_requested' => $user_requested_id,

        ]);

       //check if frienship exist
        if ($friend){
            return response()->json($friend , 200);
        }
        else{
            return response()->json('failed' , 501);
        }

    }

    public function accept_friend($requesting) //accept friend who sent the id first
    {

        if($this->has_pending_friend_request_from($requesting) === 0){

            return 0;
        }

//search in the db on the friendship table to verify the details of the sender and get the first result
        $friendship=FriendShip::where('requesting', $requesting)
                                    ->where('user_requested', $this->id)
                                    ->first(); //

        //found friendship as search
        if ($friendship){

            $friendship->update([
                'confirm' => 1,
            ]);

            return response()->json('friends now',200);
        }

        else{
            return response()->json('fail' , 501);
        }
    }

    //get friends list
    public function friends(){

        $friends = array();

        //this user asked to be your friend

        $f1 = FriendShip::where('confirm',1)
            ->where('requesting', $this->id)
            ->get(); //get all a query builder

        //push to friends array
        foreach ($f1 as $friendship):
            array_pull($friends, \App\User::find($friendship->user_requested));
        endforeach;

        //user requested to be somebodies friend
        $friend2 = array();

        $f2 = FriendShip::where('confirm',1)
            ->where('user_requested', $this->id)
            ->get(); //get all a query builder

        //push to friends array
        foreach ($f2 as $friendship):
            array_pull($friend2, \App\User::find($friendship->requesting));
        endforeach;

        return array_merge($friends, $friend2);
    }

    //getting pending friend requests
    public function pending_friend_requests(){

        $users = array(); //blank array



        $friendships = FriendShip::where('confirm',0)  //filter pendeng
            ->where('user_requested', $this->id)
            ->get(); //get all a query builder

        //push to friends array
        foreach ($friendships as $friendship):

            array_pull($users, \App\User::find($friendship->requesting));

        endforeach;


        return $users;
    }


    public function friends_ids(){

        return collect($this->friends())->pluck('id'); //change arry to collection and get me ids
    }


    public function is_friends_with($user_id){

        if(in_array($user_id, $this->friends_ids()->toArray())){

            return response()->json('true',201);
        }
    }
}

