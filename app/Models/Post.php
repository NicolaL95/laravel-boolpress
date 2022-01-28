<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','subtitle','body','cover', 'category_id'];

     public function getRouteKeyName()
     {
         return 'slug';
     }

     public function category(){
         return $this->belongsTo(Category::class);
     }

     /**
     * The tags that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
