<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;

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

Route::get('dashboard', 'App\Http\Controllers\BlogController@index')->middleware(['auth', 'verified'])->name('dashboard');
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


//Roles and Permission
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/test',function(){
        return "Hello";
    })->name('profile.test');
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');//admin route
});
Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');//agent route
});

Route::controller(RoleController::class)->group(function () {
    Route::get('/{user_id}/permission', 'AllPermission')->name('all.permission');//function and name to route
});

Route::controller(RoleController::class)->group(function () {
    Route::post('/add/{role_id}/{permission_id}', 'AddPermission')->name('add.permission');//function and name to route
});
Route::controller(RoleController::class)->group(function () {
    Route::get('/add/{role_id}/{permission_id}', 'AddPermission')->name('role.added');//function and name to route
});



// Assign role to user
Route::post('/users/{userId}/assign-role', [RoleController::class, 'assignRole']);

// Get user roles
Route::get('/users/{userId}/roles', [UserController::class, 'showUserRoles']);

// Assign permission to role
Route::post('/roles/{roleId}/assign-permission', [PermissionController::class, 'assignPermission']);

// Get role permissions
Route::get('/roles/{roleId}/permissions', [PermissionController::class, 'getRolePermissions']);


require __DIR__ . '/auth.php';
