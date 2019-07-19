<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Manager extends Authenticatable
{
    use Notifiable;

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];
}
