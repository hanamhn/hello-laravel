<?php

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

// Route::get('/', function () {
//     // return view('welcome');
//     return "Hi you!";
// });
// Route::get('/about', function () {
//     return "about Page";
// });
// Route::get('/contact', function () {
//     return "contact Page";
// });

// Route::get('/post/{id}', function ($id) {
//     return "This is post number " . $id;
// });

// Route::get('admin/post/example', array('as' => 'admin.home', function () {
//     $url = route('admin.home');
//     return "this url is " . $url;
// }));

// Route::group(['middleware' => ['web']], function () {
// });

Route::get('/post', 'App\Http\Controllers\PostsController@index');
