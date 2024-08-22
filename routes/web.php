<?php

use App\Models\User;
use App\Models\logins;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){return view('index');
});
Route::get('/login',function(){return view('login');
});
Route::get('/register',function(){return view('register');
});
Route::get('/userdetail',function(){return view('userdetail');
});
Route::get('/useraddress',function(){return view('useraddress');
});
Route::get('/email_verify',function(){return view("email_verify",["user"=>User::all()]);
});

//register page
Route::post('/register',[usercontroller::class,'register'])->name('register')->middleware('guest');
//login page
Route::get('/login',[usercontroller::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[usercontroller::class,'authenticate'])->name('Login');
//verify
Route::post('/email_verify',[usercontroller::class,'verify'])->name('email_verify')->middleware('guest');
