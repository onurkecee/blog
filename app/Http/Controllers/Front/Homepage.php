<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function index()
    {
        //print_r(Category::all());
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.homepage',$data);
    }
}
