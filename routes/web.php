<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WeblogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('login')->group(function(){
    Route::get('/' , [UserController::class , "index"])->name("login_page");
    Route::get('/sign_up' , [UserController::class , "create_account"])->name("sign_up");
    Route::post('/sign_up' , [UserController::class , "store_account"])->name("user_sign_up");
    Route::post('/' , [UserController::class , "authenticate"])->name('authenticate');
});
Route::prefix('weblog')->group(function(){
    Route::get('/' , [WeblogController::class , "index"])->name("weblog_main_page");
    Route::post('/' , [WeblogController::class , "leave_comment"])->name("leave_comment");
    Route::post('/comment', [WeblogController::class , "view_comments"])->name("view_comments");
    Route::get('/post' , [WeblogController::class , "create"])->name("post_create");
    Route::post('/post' , [WeblogController::class , "store"])->name("post_store");
    
});
