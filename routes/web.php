<?php
use App\Models\Preset;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('contacts', 'ContactController@contacts')->name('contacts'); 
Route::post('contacts', 'ContactController@contacts')->name('contacts.sender'); 
Auth::routes();

Route::get('/preset', function () {
    $preset_items = Preset::all();
    return view('preset',compact('preset_items'));
})->name('preset');

Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function () {
Route::get('/home', 'HomeController@index')->name('dashboard');
});

Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function () {
Route::resource('preset', PresetAdminController::class);
Route::resource('post', PostAdminController::class)->parameter('post','post:slug');
});
Route::resource('post', PostController::class)->only(['index','show'])->parameter('post','post:slug');


Route::get('/vue/post', function () {
    
    return view('Vue.post_index');
})->name('index.vue');

Route::resource('tag', TagController::class)->only([
    'index', 'show'
]);

Route::resource('category', CategoryController::class)->only([
    'index', 'show'
]);