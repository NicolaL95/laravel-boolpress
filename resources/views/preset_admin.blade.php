@extends('layouts.admin_app')
@section('content')
<div class="preset_container">
    <h1 class='text-center'>Lista Preset diponibili</h1>
    <a class="btn btn-primary my-2" href="{{route('admin.post.create')}}">Create</a>
      <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Preview</th>
                </tr>
              </thead>
              <tbody>
                @foreach($preset_items as $preset_item)
                <tr>
                  <td>{{$preset_item->id}}</td>
                  <td>{{$preset_item->name}}</td>
                  <td>{{$preset_item->price}}</td>
                  <td>{{$preset_item->description}}</td>
                  <td><img class="w-25" src="{{$preset_item->prieview}}" alt=""></td>
                  <td>
                    <div class="button_interaction">
                      <a class="btn btn-primary" href="{{route('admin.preset.show',$preset_item->id)}}">View</a>
                      <a class="btn btn-success" href="">Edit</a>
                       <form action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
    @endsection
