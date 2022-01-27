@extends('layouts.app')
@section('content')
<div class="post_details">
<h2>ID: {{ $post->id }}</h2>
<h2>Title: {{ $post->title }}</h2>
<h2>Subtitle: {{ $post->subtitle }}</h2>
<h2>Description: {{ $post->body }}</h2>
<h2>Preview:</h2>
 <img src="{{$post->cover}}" alt="">
</div>
    @endsection
