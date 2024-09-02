<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\carts;
use App\Models\useraddresses;
use App\Models\addtocarts;
use App\Models\products;
use App\Models\listing;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{

    public function addaddress(Request $request){
        $formfeilds=$request->validate([
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'postcode'=>'required',

        ]);
        $data = useraddresses::create($formfeilds);

        return redirect('/useraddress');
    }

  
        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect('/index');
        
        }    
}   
