<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    function getCategory()
    {
       return $this->hasOne('App\Models\Category','id','category_id');
    }
}
