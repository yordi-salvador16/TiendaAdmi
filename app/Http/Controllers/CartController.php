<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $producto= Product::find($request->id);
        if(empty($producto))
            return redirect('/');
        Cart::add(
            $producto->id,
            $producto->name,
            1,
            $producto->price,
            ["iamge"=>$producto->iamge]

        );

        return redirect()->back()->with("success","Item agregado".$producto ->name);





    }
    public function checkout()
    {
        return view('front.cart.checkout');
    }

    public function removeItem(Request $request)
    {
        Cart::remove($request->rowId);
        return redirect()->back()->with("success","Item agregado");
    }

    public function clear(Request $request)
    {
        Cart::destroy();
        return redirect()->back()->with("success","Carrito Vacio");
    }

    
}
