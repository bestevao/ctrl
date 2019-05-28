<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'client_id', 'type', 'name', 'ip', 'ip2', 'login_user', 'login_pass', 'notes'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function backups()
    {
       return $this->hasMany('App\Backup');
    }
}
