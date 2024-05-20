<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    AgentController,
    RoleController,
    UserController,
    PermissionController,
    BlogController,
    CommentController,
    ReactorController
};

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

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route
Route::get('dashboard', [BlogController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Blog routes
Route::prefix('blog')->middleware('auth')->group(function () {
    Route::get('create', function () {
        return view('blog.create');
    })->name('blog.create');
    
    Route::post('save', [BlogController::class, 'store'])->name('blog.save');
    Route::get('{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('{blog}/update', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('{blog}', [BlogController::class, 'delete'])->name('blog.delete');
    Route::get('{id}/comment', [BlogController::class, 'comment'])->name('blog.comment');
    Route::get('service', function () {
        return view('blog.service');
    })->name('blog.service');
});

// Comment route
Route::post('comment/save', [CommentController::class, 'store'])->name('comment.save')->middleware('auth');

// User profile route
Route::get('user/{id}/profile', [UserController::class, 'profile'])->middleware(['auth'])->name('user.profile');

// Participant related route
Route::post('respond/{blog}', [ReactorController::class, 'respond'])->name('blog.respond');

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/test', function() {
        return "Hello";
    })->name('profile.test');

    // Admin routes
    Route::middleware('role:1')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    });

    // Agent routes
    Route::middleware('role:2')->group(function () {
        Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
    });
});

// Roles and Permissions routes
Route::controller(RoleController::class)->group(function () {
    Route::get('/{user_id}/permission', 'AllPermission')->name('all.permission');
    Route::post('/add/{role_id}/{permission_id}', 'AddPermission')->name('add.permission');
    Route::get('/add/{role_id}/{permission_id}', 'AddPermission')->name('role.added');
});

// Role assignments
Route::post('/users/{userId}/assign-role', [RoleController::class, 'assignRole']);
Route::get('/users/{userId}/roles', [UserController::class, 'showUserRoles']);

// Permission assignments
Route::post('/roles/{roleId}/assign-permission', [PermissionController::class, 'assignPermission']);
Route::get('/roles/{roleId}/permissions', [PermissionController::class, 'getRolePermissions']);

// Authentication routes
require __DIR__ . '/auth.php';
