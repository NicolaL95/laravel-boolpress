@extends('layouts.app')
@section('content')
<div class="tag_container">
    <h1 class='text-center'>Lista Tag</h1>
    <div class="d-flex p-5 flex-wrap justify-content-center gap_25">
    @foreach($tag_items as $tag_item)
        <a class="btn btn-success" href="{{'tag_show',$tag_item->id}}">#{{$tag_item->keyword}}</a>
    @endforeach
    </div>
    </div>
    @endsection
