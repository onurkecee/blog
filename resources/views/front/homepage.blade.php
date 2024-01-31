@extends('front.layouts.master')
@section('content')

<div class="col-md-9 col-lg-8 ">
    @foreach($blogs as $blog)
    <div class="post-preview">
        <a href="post.html">
            <h2 class="post-title">{{$blog->title}}</h2>
            <h3 class="post-subtitle">{{\Illuminate\Support\Str::limit($blog->content,75)}}</h3>
        </a>
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