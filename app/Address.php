<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [ 'id', 'number', 'street', 'city', 'state', 'zip', 'type', 'contact_id' ];

    public function contacts()
    {
        return $this->belongsTo('App\Contact');
    }
}
