@extends('layouts.app')
@section('content')
<div class="preset_container">
    <h1 class='text-center'>Lista Post</h1>
    <div class="d-flex p-5 flex-wrap justify-content-center gap_25">
    @foreach($post_items as $post_item)
    <div class="card" style="width: 18rem;">
  <img src="{{$post_item->cover}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$post_item->title}}</h5>
    <p>{{$post_item->subtitle}}$</p>
    <p class="card-text">{{$post_item->body}}</p>
    <a href="{{route('post.show',$post_item->slug)}}" class="btn btn-primary">See Details</a>
  </div>
</div>
    @endforeach
    </div>
    </div>
    @endsection
