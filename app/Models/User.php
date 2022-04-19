<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function passport()
    {
        return $this->hasOne(Passport::class, 'user_id', 'id');
    }

    public function forums()
    {
        return $this->hasMany(Forum::class, 'user_id', 'id');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
