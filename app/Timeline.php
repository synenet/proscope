<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    //

    protected $fillable = [
        'name', 'project_id', 'completion_date','status'
    ];


    public function project(){
    	return $this->belongsTo(Project::class);
    }
}
