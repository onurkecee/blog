@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')

<div class="col-md-9 col-lg-8 ">
    @foreach($blogs as $blog)
    <div class="post-preview">
        <a href="{{route('blogDetay',[$blog->getCategory->slug, $blog->id])}}">
            <h2 class="post-title">{{$blog->title}}</h2>
        </a>
        <img src="{{$blog->image}}" />
        <h3 class="post-subtitle">{{\Illuminate\Support\Str::limit($blog->content,75)}}</h3>

        <p class="post-meta">

            <a href="#!">{{$blog->getCategory->name}}</a>
            {{$blog->created_at->diffForHumans()}}
        </p>
    </div>
    <hr class="my-4" />
    @endforeach
</div>
</div>
@include('front.widgets.categoryWidget')
@endsection