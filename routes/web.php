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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function () {
//    return "Hi about page";
//});
//
//Route::get('/contact', function () {
//    return "hi I am contact";
//});
//
//Route::get('/post/{id}/{name}', function($id, $name){
//    return "This is post number ". $id . " " . $name;
//});
//
//Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
//    $url = route('admin.home');
//
//    return "this url is ". $url;
//} ));

use App\Http\Controllers as C;

//Route::get('/post/{id}', [C\PostsController::class, 'index']);

//Route::resource('posts', C\PostsController::class);

Route::get('/contact', [C\PostsController::class, 'contact' ]);

Route::get('post/{id}/{name}/{password}', [C\PostsController::class, 'show_post' ]);
