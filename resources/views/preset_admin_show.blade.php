@extends('layouts.admin_app')
@section('content')
<div class="preset_details">
<h2>ID: {{ $preset->id }}</h2>
<h2>Name: {{ $preset->name }}</h2>
<h2>Price: {{ $preset->price }}</h2>
<h2>Description: {{ $preset->description }}</h2>
<h2>Preview:</h2>
 <img src="https://picsum.photos/id/237/600/400" alt="">
</div>
    @endsection
