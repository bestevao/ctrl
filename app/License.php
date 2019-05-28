<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
	protected $fillable = [
        'client_id', 'account_id', 'name', 'key', 'expires'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    public function account()
    {
        return $this->belongsTo('App\Account');
    }
    
}
