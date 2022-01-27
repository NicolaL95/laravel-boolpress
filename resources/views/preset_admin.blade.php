@extends('layouts.admin_app')
@section('content')
<div class="preset_container">
    <h1 class='text-center'>Lista Preset</h1>
    <div class="d-flex p-5 flex-wrap justify-content-center gap_25">
    @foreach($preset_items as $preset_item)
    <div class="card" style="width: 18rem;">
  <img src="https://picsum.photos/id/237/600/400" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$preset_item->name}}</h5>
    <p>{{$preset_item->price}}$</p>
    <p class="card-text">{{$preset_item->decription}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    @endforeach
    </div>
    </div>
    @endsection
