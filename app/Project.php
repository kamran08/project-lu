<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'description', 'team_id', 'user_id', 'projectName', 'type', 'category', 'image', 'file', 'link'
    ];
    public function team()
    {
        return $this->hasMany('App\Team', 'user_id', 'user_id');
    }
}
