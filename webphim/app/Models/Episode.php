<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $table = 'Episode';
    // protected $primaryKey = 'id';
    // protected $keyType = 'string';
    public function Movie()
    {
        return $this->belongsTo('App\Models\Movie', 'movie_id', 'id');
    }
}
