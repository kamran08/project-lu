<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    //
    protected $fillable = [
        'from', 'to', 'student_id', 'project_id', 'email', 'mobile', 'reason'
    ];

    
    public function user()
    {
        return $this->belongsTo('App\User', 'from');
    }
}
