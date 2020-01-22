<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $fillable = [
        'from', 'to', 'student_id', 'project_id', 'email', 'mobile', 'reason'
    ];
}
