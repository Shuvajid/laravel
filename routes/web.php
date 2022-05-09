<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StudentController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

route::get('/',[PostController::class,'viewPost'])->name('all.posts');

/* ========== blog routes ====== */
route::get('all/blog',[BlogController::class,'allBlog'])->name('all.blog');
route::get('add/blog',[BlogController::class,'addBlog'])->name('add.blog');
route::post('store/blog',[BlogController::class,'storeBlog'])->name('store.blog');
route::get('single/blog/{id}',[BlogController::class,'singleBlog'])->name('single.blog');
route::get('edit/blog/{id}',[BlogController::class,'editBlog'])->name('edit.blog');
route::post('update/blog/{id}',[BlogController::class,'updateBlog'])->name('update.blog');



/* ===========resource Route=========== */

 route::resource('/library',LibraryController::class);


 /*============ Student list with resource========*/
 route::resource('/student',StudentController::class);