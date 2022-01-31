@extends('layouts.app')
@section('content')
<div class="category_container">
    <h1 class='text-center'>Lista Categorie</h1>
    <div class="d-flex p-5 flex-wrap justify-content-center gap_25">
    @foreach($category_items as $category_item)
        <a class="btn btn-success" href="{{route('category.show',$category_item->id)}}">#{{$category_item->name}}</a>
    @endforeach
    </div>
    </div>
    @endsection
