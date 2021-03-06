<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/* Route::get('posts', function(){
$post = Post::with(['category'])->paginate(3);
return response()->json([
    'status_code' => 'ok',
    'response' => $post
]);
}); */


Route::get('post','API\PostController@index');
Route::get('post/{post}','API\PostController@show');
Route::get('category','API\CategoryController@index');
Route::get('tag','API\TagController@index');