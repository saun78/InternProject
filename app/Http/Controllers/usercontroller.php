<?php

namespace App\Http\Controllers;

use App\Mail\emailverify;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller

{
//register
    public function register(Request $request){
        $formfeilds = $request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required'],
        ]);
        $random =rand(111111,999999);
        $formfeilds['otp']=$random;
        

        //hash password
        $formfeilds['password']=bcrypt($formfeilds['password']);

    
        $user=User::create($formfeilds);
        Mail::to($user->email)->send(new emailverify($user));
        return redirect("/login")->with('message','register succesfully');
    }

    // login
    public function login(){
        return view('login');
    } 

    public function authenticate(Request $request){
        $formfeilds=$request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
    
        if(Auth::attempt($formfeilds)){
            $request->session()->regenerate();

            return redirect("/index")->with('message','Login succesful');
        }

        return back()->withErrors(['email'=>'invalid Credentials'])->onlyInput('email');
    }
}
