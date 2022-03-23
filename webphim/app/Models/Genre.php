<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genre';

    public function Genre()
    {
        return $this->hasMany('App\Models\Movie', 'genre_id', 'id');
    }
}
