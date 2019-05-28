<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'address', 'postalcode', 'city', 'nif', 'phonenumber', 'mobile', 'email'
    ];

    public function devices()
    {
       return $this->hasMany('App\Device');
    }

    public function accounts()
    {
       return $this->hasMany('App\Account');
    }
    
    public function licenses()
    {
       return $this->hasMany('App\Licenses');
    }
}
