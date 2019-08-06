<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Manager extends Authenticatable
{
    use Notifiable,HasApiTokens;

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    public function department()
    {
        return $this->hasOne(Department::class);
    }
}
