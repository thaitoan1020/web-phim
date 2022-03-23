<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movie';
    // protected $primaryKey = 'id';
    // protected $keyType = 'string';
    public function Category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    public function Country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id', 'id');
    }
    public function Genre()
    {
        return $this->belongsTo('App\Models\Genre', 'genre_id', 'id');
    }
    public function Episode()
    {
        return $this->hasMany('App\Models\Episode', 'movie_id', 'id');
    }
    

}
