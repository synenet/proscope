<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $fillable = ['name', 'brief', 'description','category_id','logo','banner','start_date','completion_date', 'user_id'];

     public function user(){
    	return $this->belongsTo(User::class);
    }

    public function category(){
    	return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function timelines(){
    	return $this->hasMany(Timeline::class);
    }

    public function teams(){
    	return $this->hasMany(Team::class);
    }

    public function projectTeam(){
    	return $this->hasMany(ProjectTeam::class);
    }
}
