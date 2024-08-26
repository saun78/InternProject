<?php

namespace App\Http\Controllers;

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

    //index
    public function find(){

        $data = products::all();

        return view('/index',compact ('data'));
    }



    public function addcart(Request $request,$id){
        $formfeilds = $request->validate([
            'name'=>'required',
            'gram'=>'required',
            'price'=>'required',
        ]);
        $data = addtocarts::all();

        return view('/cart',compact ('data'));


        // $cart = self::pos();

        // Iterate through the listings to find the one with the matching id
        // foreach ($cart as $product) {
        //     if ($product->id == $id) {  // Use object notation for accessing properties
        //         return $product;
        //     }
        // }

   
    
    }  
    
}   
