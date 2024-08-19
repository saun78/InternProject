<?php

use App\Models\logins;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/index',function(){
    return view('index');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/register',function(){
    return view('register');
});

//register page
Route::post('/register',[usercontroller::class,'register'])->name('register')->middleware('guest');
//login page
Route::get('/login',[usercontroller::class,'login'])->name('login');
Route::post('/login',[usercontroller::class,'authenticate']);


