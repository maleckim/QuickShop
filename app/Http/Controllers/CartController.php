<?php

namespace App\Http\Controllers;

use App\User;
use App\Shoppingcart;
use App\Cartitem;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index() 
    {
        $user = auth()->user();
        $cart = Shoppingcart::where('userid','=', $user->id)->first();
        $items = Cartitem::join('items', 'cartitems.productid', '=', 'items.id')->select('*')->get();
        $total = 0;

        foreach ($items as $item)
        {
           $total += (int)$item->price;
        }

        return view('cart.index', compact('items'),['total'=> $total]);
    }
    public function store()
    {
        $data = request();
        $user = auth()->user();
        $cart = Shoppingcart::where('userid','=', $user->id)->first();

        if(is_null($cart)){
            Shoppingcart::insert(['userid' => $user->id, ]);
        }

        Cartitem::insert(['productid' => $data->add, 'shoppingcartid' => $cart->id, ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        
        $user = auth()->user();
        $cart = Shoppingcart::where('userid','=', $user->id)->first();
        Cartitem::where('shoppingcartid','=', $cart->id)->where('productid','=', $id)->first()->delete();

        return redirect('/cart');
    }
}
