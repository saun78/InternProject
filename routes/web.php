<?php

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\logins;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\usercontroller;
use App\Models\useraddresses;
use Illuminate\Support\Facades\Route;

//display
Route::get('/index',function(){
    return view('index');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/register',function(){
    return view('register');
});
Route::get('/userdetail',function(){
    return view('userdetail');
});
Route::get('/logout',function(){
    return view('index');})
    ->name('logout');

Route::get('/cart',function(){
    return view('cart');
});

//show data
Route::get('/useraddress',function(){
    $data=useraddresses::all();
    return view('useraddress',compact('data'));
});


Route::post('/logout',[indexcontroller::class,'logout']);

Route::get('/index', [indexController::class, 'find']);

// address
Route::post('/useraddress',[indexcontroller::class,'addaddress']);

//register page
Route::post('/register',[usercontroller::class,'register'])->name('register')->middleware('guest');

//login page
Route::get('/login',[usercontroller::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[usercontroller::class,'authenticate'])->name('Login');

//verify
Route::post('/email_verify',[usercontroller::class,'verify'])->name('email_verify')->middleware('guest');
Route::get('/email_verify',function(){return view("email_verify",["user"=>User::all()]);
});

// addcart
Route::post('/cart',[indexcontroller::class,'addcart'])->name('cart');
