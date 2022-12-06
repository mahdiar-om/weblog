<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\WebProcessor;

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



Route::get('/login' ,       [UserController::class , "loginPage"])->name("login-page");
Route::post('/login' ,      [UserController::class , "login"])->name('login');
Route::get('/logout',       [UserController::class , "logout"])->name('logout');

Route::get('/sign-up' ,     [UserController::class , "signupPage"])->name("sign-up-page");
Route::post('/sign-up' ,    [UserController::class , "signup"])->name("sign-up");

Route::get('/' ,            [PostController::class , "Home"])->name('Home');

Route::prefix('posts')->middleware('auth')->name('posts.')->group(function(){


    Route::get('/create' ,        [PostController::class , "create"])->name('create');    
    Route::post('/create' ,       [PostController::class , "store"])->name('store');

    Route::get('/comments/{id}' , [PostController::class , "comments"])->name('comments');

    Route::get('/login-user-posts' ,    [PostController::class , "loginUserPost"])->name('login_user_post');
    //Route::get('/user-posts/{id}' ,    [PostController::class , "userPost"])->name('user_post');

   // Route::get('/update/{id}' ,   [PostController::class , "updatePage"])->name('update_page');    
    //Route::post('/update/{id}' ,  [PostController::class , "update"])->name('update');

    Route::get('/{id}' ,          [PostController::class , "show"])->name('show');

});

Route::prefix('comment')->middleware('auth')->name('comment.')->group(function(){
    
    
    Route::get('/create/{id}' ,   [CommentController::class , "create"])->name('create');
    Route::post('/store' ,        [CommentController::class , "store"])->name('store');
    Route::get('/verification/{id}' ,  [CommentController::class , "verificationPage"])->name('verification_Page');
    Route::post('/verification/{id}' , [CommentController::class , "verification"])->name('verification');

});

Route::prefix('category')->middleware('auth')->name('category.')->group(function(){
    Route::get('/create' ,        [CategoryController::class , "create"])->name('create');
    Route::post('/create' ,       [CategoryController::class , "store"])->name('store');
    Route::get('/show/{id}' ,     [CategoryController::class , "show"])->name('show');
});
