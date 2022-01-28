@extends('layouts.admin_app')
@section('content')
<h1>Modifica un post</h1>
@include('partials.errors')
<form action="{{route('admin.post.update',$post->slug)}}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control @error ('title') is_invalid @enderror" placeholder="write your title..." aria-describedby="TitleHelper" value="{{$post->title}}">
      <small id="TitleHelper" class="text-muted">Add Title</small>
    </div>

     <div class="mb-3">
      <label for="category_id" class="form-label"></label>
      <select class="form-control @error ('category_id') is_invalid @enderror"  name="category_id" id="category_id">
        <option value="">No Categories</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    
    <div class="mb-3">
      <label for="subtitle" class="form-label">Subtitle</label>
      <input type="text" name="subtitle" id="subtitle" class="form-control @error ('subtitle') is_invalid @enderror" placeholder="write your subtitle..." aria-describedby="SubTitleHelper" value="{{$post->subtitle}}">
      <small id="SubTitleHelper" class="text-muted">Add Subtitle</small>
    </div>

    <div class="mb-3">
      <label for="cover" class="form-label">Cover Image</label>
      <input type="text" name="cover" id="cover" class="form-control @error ('cover') is_invalid @enderror" placeholder="https//" aria-describedby="CoverHelper" value="{{$post->cover}}">
      <small id="CoverHelper" class="text-muted">add Cover Link</small>
    </div>

<div class="mb-3">
  <label for="body" class="form-label">Body</label>
  <textarea class="form-control" name="body" id="body" rows="10">{{$post->body}}</textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection
