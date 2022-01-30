<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
class PostAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_items = Post::all();
        return view('post_admin',compact('post_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        $tags = Tag::all();

        return view('post_admin_create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $user = Auth::user()->id;
       $validated = $request->validate([
            'title' => ['required','unique:posts','max:200'],
            'subtitle' => ['nullable'],
            'cover' => ['nullable'],
            'body' => ['nullable'],
            'category_id' => ['nullable','exists:categories,id'],
            'user_id' => ['nullable'],
            'tags'=>'exists:tags,id'
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated = Arr::add($validated, 'user_id', "user");
        $newpost = Post::create($validated);
        
            $newpost->tags()->attach($request->tags);


        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
         return view('post_admin_show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
         $categories= Category::all();
        return view('post_admin_edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => ['required',
            Rule::unique('posts')->ignore('$post->id'),
            'max:200'
        ],
            'subtitle' => ['nullable'],
            'cover' => ['nullable'],
            'body' => ['nullable'],
            'category_id' => ['nullable','exists:categories,id'],
            'tags' => 'exists:tags,id'
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $post->update($validated);   
          $post->tags()->sync($request->tags);
        return redirect()->route('admin.post.index')->with('message','Post aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       $post->delete();
      return redirect()->route('admin.post.index')->with('message','Post eliminato con successo!');
    }
}
