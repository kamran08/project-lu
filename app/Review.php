<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password'
    ];
}
