<?php

namespace App\Http\Controllers;

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

        //hash password
        $formfeilds['password']=bcrypt($formfeilds['password']);

    
        User::create($formfeilds);
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
