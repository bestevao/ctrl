<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'client_id', 'name', 'login_user', 'login_pass', 'site', 'notes'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function licenses()
    {
       return $this->hasMany('App\License');
    }
}
