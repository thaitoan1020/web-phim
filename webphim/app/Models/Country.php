<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'country';

    public function Country()
    {
        return $this->hasMany('App\Models\Movie', 'country_id', 'id');
    }
}
