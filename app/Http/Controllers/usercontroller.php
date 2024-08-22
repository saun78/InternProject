<?php

namespace App\Http\Controllers;

use DateTime;
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
        $formfeilds['status'] ='Pending';
        $user = User::create($formfeilds);
        Mail::to($request->email)->send(new emailverify($user));
        return redirect('email_verify')->with('email',$request->email);

        //hash password
        $formfeilds['password']=bcrypt($formfeilds['password']);

        $user=User::create($formfeilds);
        Mail::to($user->email)->send(new emailverify($user));
        return redirect("/login")->with('message','register succesfully');
    }

    //verify
    public function verify(Request $request){
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $request->validate([
            'email' => 'required',
            'otp' => 'required|min:6|numeric',
        ]);
    
        $user = User::where('email', $request->email)->where('otp', $request->otp)->first();
        $date = new DateTime();
        $dateTime = $date->format('Y-m-d H:i:s');

        if ($user) {
            $user->update([
                'status' => 'Complete',
                'email_verified_at' => $dateTime,
            ]);
            
            return redirect()->route('login');
        }
    }

    // login
    public function login(){
        return view('login');
    } 

    //section id
    public function authenticate(Request $request){
        $formfeilds=$request->validate([
            'email'=>['required','email'],
            'password'=>'required',
        ]);
    
        if(Auth::attempt($formfeilds)){
            $request->session()->regenerate();

            return redirect("/")->with('message','Login succesful');
        }

        return back()->withErrors(['email'=>'invalid Credentials'])->onlyInput('email');
    }
}
