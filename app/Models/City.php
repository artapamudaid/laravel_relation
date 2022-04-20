<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function forums()
    {
        return $this->hasManyThrough(Forum::class, User::class, 'city_id', 'user_id', 'id');
    }
}
