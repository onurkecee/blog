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
        $data['blogs'] = Blog::orderBy('created_at', 'DESC')->get();
        $data['categories'] = Category::inRandomOrder()->get();
        return view('front.homepage', $data);
    }

    public function blogDetay($category, $id)
    {
        $category=Category::whereSlug($category)->first() ?? abort(404,'Sayfa Bulunamadı');
        $blogDetay = Blog::whereId($id)->whereCategoryId($category->id)->first() ?? abort(404, 'Sayfa Bulunamadı');
        $blogDetay->increment('hit');
        $data['blogDetay'] = $blogDetay;
        $data['categories'] = Category::inRandomOrder()->get();
        return view('front.blogDetay', $data);
    }
}
