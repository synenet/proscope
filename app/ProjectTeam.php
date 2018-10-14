<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    //

    protected $fillable = [
        'user_id', 'project_id'
    ];


    public function project(){
    	return $this->belongsTo(Project::class);
    }

    public function profile(){
    	return $this->HasOne(Profile::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
