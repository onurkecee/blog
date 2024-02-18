<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function kategoriSayisi()
    {
        return $this->hasMany('App\Models\Blog','category_id','id')->count();
    }
}
