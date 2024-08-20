<?php

namespace App\Http\Controllers;

use App\Models\listing;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{

    public function detailupdate(Request $request,listing $listing){
        $formfeilds=$request->validate([
            'city'=>'required',
            'state'=>'required',
            'postcode'=>'required',

        ]);
        $listing->update($formfeilds);
        
        return back()->with('message','update sucess');
    }
}
