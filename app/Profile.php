<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'about',
    ];

    //relationship btn profile and user

 public function profileAndUserRelation(){

     //this model has on user
     return $this->belongsTo('App/User');
 }
}
