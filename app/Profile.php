<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    {
    protected $fillable = ['firstName', 'lastName','address', 'jobTitle' ];
 
 


public function User()
    {
        return $this->belongsTo('User');
    }

}

}
