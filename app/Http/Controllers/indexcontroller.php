<?php

namespace App\Http\Controllers;

use App\Models\products;
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

    public function find(){

        $data = products::all();

        return view('/index',compact ('data'));
    }

    public function addcart(Request $request,$id){
        $formfeilds = $request->validate([
            'name'=>'required',
            'price'=>'required',
        ]);
        // $cart = self::pos();

        // // Iterate through the listings to find the one with the matching id
        // foreach ($cart as $product) {
        //     if ($product->id == $id) {  // Use object notation for accessing properties
        //         return $product;
        //     }
        // }
    
    }
}