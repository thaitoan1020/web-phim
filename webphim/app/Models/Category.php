<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    public function Category()
    {
        return $this->hasMany('App\Models\Movie', 'category_id', 'id')->orderBy('id','DESC');
    }
}
