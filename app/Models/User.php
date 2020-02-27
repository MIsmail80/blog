<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    protected $hidden  = ['password'];

    protected $appends = ['roleName'];

    public function getRoleNameAttribute()
    {
        if ($this->role_id == 1) {
            return 'Admin';
        } elseif ($this->role_id == 2) {
            return 'Author';
        }
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
