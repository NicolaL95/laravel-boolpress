<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

   public function filter_category($cat){
      ddd($cat);
      $post_items = Post::orderByDesc('id')->paginate(5);
      return view('post_index_filter_category',compact('post_items'));
   }

    public function filter_tag(){
      $post_items = Post::orderByDesc('id')->paginate(5);
      return view('post_index_filter_tags',compact('post_items'));
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $post_items = Post::orderByDesc('id')->paginate(5);
       return view('post_index',compact('post_items'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       return view('post_show',compact('post'));
    }
}
