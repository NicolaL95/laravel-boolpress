@extends('layouts.admin_app')
@section('content')
<div class="preset_container">
    <h1 class='text-center'>Lista Preset diponibili</h1>
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
                  <td><img class="w-25" src="https://picsum.photos/id/237/600/400" alt=""></td>
                  <td>
                    <div class="button_interaction">
                      <a class="btn btn-primary" href="">View</a>
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
