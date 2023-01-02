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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('dashboard', function(){
//     return view('dashboard');
// })
// ->middleware(['auth'])->name('dashboard');

Route::get('user/{id}/profile', 'App\Http\Controllers\UserController@profile')
->middleware(['auth'])->name('user.profile');

Route::get('dashboard', 'App\Http\Controllers\BlogController@index')->name('dashboard');
// Route::get('blog', 'App\Http\Controllers\BlogController@index')->name('blog.index');


Route::get('blog/creat', function () {
    return view('blog.creat');
})
    ->name('blog.creat')
    ->middleware('auth');

Route::post('blog/save', 'App\Http\Controllers\BlogController@store')
    ->name('blog.save')
    ->middleware('auth');

//Route Promote//Route Model Binding
Route::get('blog/{blog}/edit', 'App\Http\Controllers\BlogController@edit')->name('blog.edit');

Route::get('blog/{id}/comment', 'App\Http\Controllers\BlogController@comment')->name('blog.comment')->middleware('auth');
Route::post('comment/save', 'App\Http\Controllers\CommentController@store')
    ->name('comment.save')
    ->middleware('auth');

Route::put('blog/{blog}/update', 'App\Http\Controllers\BlogController@update')->name('blog.update');
Route::delete('blog/{blog}', 'App\Http\Controllers\BlogController@delete')->name('blog.delete');


// Participant related routes
Route::post('respond/{blog}', 'App\Http\Controllers\ReactorController@respond')->name('blog.respond');

Route::get('blog/service', function(){
    return view('blog.service');
})->name('blog.service');

require __DIR__ . '/auth.php';
