<?php


use App\Http\Middleware\authenticate;
use App\Models\carts;
use App\Models\products;
use App\Models\User;
use App\Http\Controllers\itemcontroller;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\usercontroller;
use App\Models\useraddresses;
use Illuminate\Support\Facades\Route;

//display
Route::get('/index',function(){
    $data = products::all();
    return view('index',compact('data'));
})->name("index");

Route::get('/login',function(){
    return view('login');
})->middleware(authenticate::class);

Route::get('/register',function(){
    return view('register');
});

Route::get('/userdetail',function(){
    return view('userdetail');
})->middleware(authenticate::class);


//products
Route::get('/product/{id}', function($id) {
    $product = products::find($id);// Get product by ID
    return view('product',compact('product'));
})->name('product.add')->middleware(authenticate::class);

Route::post('/product/{id}', [itemcontroller::class, 'selectItem'])->name('product');

//show data
Route::get('/useraddress',function(){
    $data=useraddresses::all();
    return view('useraddress',compact('data'));
})->middleware(authenticate::class);


// address
Route::post('/useraddress',[indexcontroller::class,'addaddress'])->middleware(authenticate::class);


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
// Route::post('/cart',[itemcontroller::class,'addcart'])->name('cart');


//log out
Route::post('/logout', [indexController::class, 'logout'])->name('logout');