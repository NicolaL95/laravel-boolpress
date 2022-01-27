@extends('layouts.admin_app')
@section('content')
<div class="preset_container">
    <h1 class='text-center'>Lista Post diponibili</h1>
    <a class="btn btn-primary my-2" href="{{route('admin.post.create')}}">Create</a>
      <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Description</th>
                  <th>Preview</th>
                </tr>
              </thead>
              <tbody>
                @foreach($post_items as $post_item)
                <tr>
                  <td>{{$post_item->id}}</td>
                  <td>{{$post_item->title}}</td>
                  <td>{{$post_item->subtitle}}</td>
                  <td>{{$post_item->body}}</td>
                  <td><img class="w-25" src="{{$post_item->cover}}" alt=""></td>
                  <td>
                    <div class="button_interaction">
                      <a class="btn btn-primary" href="{{route('admin.post.show',$post_item->slug)}}">View</a>
                      <a class="btn btn-success" href="">Edit</a>
                      <a class="btn btn-danger" href="">Delete</a>
                    </div>
                  </td>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
    @endsection
