<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [ 'firstName', 'lastName', 'email', 'phone', 'birthday' ];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }
}
