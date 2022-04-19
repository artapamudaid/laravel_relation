<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function lessons()
    {
        return $this->morphedByMany(Lesson::class, 'taggable');
    }

    public function forums()
    {
        return $this->morphedByMany(Forum::class, 'taggable');
    }
}
