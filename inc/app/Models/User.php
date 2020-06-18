<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    public $timestamps = false;

    protected $fillable = [
        'name', 
        'email', 
        'password',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
