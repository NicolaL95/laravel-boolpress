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

Auth::routes();

Route::get('/preset', function () {
    $preset_items = Preset::all();
    return view('preset',compact('preset_items'));
})->name('preset');

Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('auth')->group(function () {
Route::get('/home', 'HomeController@index')->name('dashboard');
});
