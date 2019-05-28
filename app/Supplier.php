<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'login_user', 'login_pass', 'client_number', 'phonenumber', 'mobile', 'email', 'notes'
    ];

    public function suppliers()
	{
	   return $this->belongsTo('App\Supplier');
	}
}
