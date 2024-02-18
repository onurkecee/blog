@extends('front.layouts.master')
@section('title',$blogDetay->title)
@section('bg',$blogDetay->image)
@section('content')
            <div class="col-md-7 ">
               {!! $blogDetay->content !!}
               <br/>
               <span class="text-danger">Okunma Sayısı : <b>{{$blogDetay->hit}}</b></span>
            </div>
@include('front.widgets.categoryWidget')
@endsection