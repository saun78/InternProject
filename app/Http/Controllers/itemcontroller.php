<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\carts;
use Illuminate\Http\Request;

class itemcontroller extends Controller
{

    public function addtocart(request $request,$id)
{
    $formfeilds = $request->validate([
        'name'=>['required','name'],
        'gram'=>['required','gram'],
        'price'=>['required','price'],
        'gram'=>['required','gram'],
        'description'=>['required','description'],
        'password'=>['required'],
    ]);
    return redirect('index')->with('message','Item added to cart successfully');
}

    public function selectItem($id)
        {
            // Retrieve the item ID from the form submission
            
        
            // Use the item ID to find the product
            $item = Products::find($id);
        
            return redirect()->route('product.add', $id);
        }
    

}