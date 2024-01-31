<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class Homepage extends Controller
{
    public function index()
    {
        $data['blogs']=Blog::orderBy('created_at','DESC')->get();
        $data['categories'] = Category::inRandomOrder()->get();
        return view('front.homepage', $data);

        
    } 
}
