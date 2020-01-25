<?php

namespace App;

use DB;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'description', 'team_id', 'user_id', 'projectName', 'type', 'category', 'image', 'file', 'link','book'
    ];
    public function team()
    {
        return $this->hasMany('App\Team', 'user_id', 'user_id');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review', 'project_id');
    }
    public function avgreview()
    {
        return $this->hasOne('App\Review')
            ->select("id", 'project_id', DB::raw('cast(AVG(rate) as decimal(10,2)) AS averageRating'))
            ->groupBy('project_id');
    }
    public function hasPic()
    {
        return $this->hasOne('App\Review')->where('user_id', Auth::user()->id);
    }
  
}
