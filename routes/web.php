<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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





Route::get('sign_up', function () {
    return view('signup');
});

Route::get('login', function () {
    if(session()->has('user')){
        //dd('fd');
       return redirect('profile');
    }
    return view('login');
});

Route::post("login",[UserController::class,'login']);

Route::post("sign_up",[UserController::class,'signUp']);

//Route::view("profile",'profile');

Route::get("users",[UserController::class,'DisplayUsers']);

Route::get("edit_user/{id}",[UserController::class,'edit']);

Route::post("edit_user",[UserController::class,'update']);

Route::get("delete_user/{id}",[UserController::class,'destroy']);

Route::get('profile', function () {
    if(session()->has('user')){
    return view('profile');
    }
    return redirect('login');
});

Route::get('logout', function () {
    if(session()->has('user')){
        session()->pull('user',null);
    }
    return redirect('login');
});
