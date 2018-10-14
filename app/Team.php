<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    protected $fillable = [
        'project_id', 'project_team_id', 'role_id'
    ];

    public function user(){
    	return $this->belongsTo(User::class, 'project_team_id','id');
    }
    public function project(){
    	return $this->belongsTo(Project::class);
    }

    public function roles(){
    	return $this->hasOne(Role::class, 'id','role_id');
    }

    public function profile(){
    	return $this->hasOne(Profile::class, 'user_id', 'project_team_id');
    }

    public function projectTeam(){
    	return $this->belongsTo(ProjectTeam::class);
    }
}
