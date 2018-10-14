<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    protected $fillable = [
        'user_id', 'about', 'profession','gender','image'
    ];


    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function project_team(){
    	return $this->belongsTo(ProjectTeam::class);
    }
}
