<?php

use App\Http\Controllers\UserController;
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

Route::get('user/{id}', [UserController::class, 'showProfile']);
Route::get('passport/{id}', [UserController::class, 'showPassport']);

Route::get('lesson/create', [UserController::class, 'createLesson']);
Route::get('lesson/delete', [UserController::class, 'deleteLesson']);
Route::get('lesson/update', [UserController::class, 'updateLesson']);
Route::get('lesson/sync', [UserController::class, 'syncLesson']);
Route::get('lesson/{id}', [UserController::class, 'showLesson']);

Route::get('forum/create', [UserController::class, 'createForum']);
Route::get('forum/update', [UserController::class, 'updateForum']);
Route::get('forum/delete', [UserController::class, 'deleteForum']);
Route::get('forum/{id}', [UserController::class, 'showForum']);
