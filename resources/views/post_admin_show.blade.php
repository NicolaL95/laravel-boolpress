@extends('layouts.admin_app')
@section('content')
<div class="post_view d-flex">
<div class="post_details">
<h2>ID: {{ $post->id }}</h2>
<h2>Title: {{ $post->title }}</h2>
<h2>Category: {{ $post->category != null ? $post->category->name : '-'}}</h2>
<h2>Subtitle: {{ $post->subtitle }}</h2>
<h2>Description: {{ $post->body }}</h2>
<h2>Preview:</h2>
 <img src="{{$post->cover}}" alt="">
</div>
<div class="tags">
        <h4>Tags</h4>
        @if(count($post->tags) > 0) 
            @foreach($post->tags as $tag)
                {{$tag->keyword}}
            @endforeach
        @else 
            <span>No tags</span>

        @endif
   
    </div>
</div>
@endsection
