<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, Notifiable;

    // Set the primary key


    // Disable auto-increment if your primary key is not auto-incrementing
    public $incrementing = true; // Set this to false if `admin_id` is not auto-incrementing

    // Set the table name if not the default
    protected $table = 'admins';

    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_password',
        'admin_address',
        'admin_city',
        'admin_number',
        'admin_image',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
