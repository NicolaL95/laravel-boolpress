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


}
