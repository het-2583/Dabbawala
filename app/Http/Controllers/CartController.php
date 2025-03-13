<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function addtocart(products $product)
    {
        //return view('productpage');
       $cart=session()->get('cart');
       
        if(!$cart){
        $cart=[
            $product->id=>[
                'name'          =>$product->name,
                'quantity'      =>1,
                'price'         =>$product->price,
                'img'           =>$product->img,
            ]
            ];
            session()->put('cart',$cart);
            return redirect('cart')->with('success',"Added to cart");
        }

        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
            session()->put('cart',$cart);
            return redirect('cart')->with('success',"Added to cart");
        }

        $cart[$product->id]=[
                'name'          =>$product->name,
                'quantity'      =>1,
                'price'         =>$product->price,
                'img'           =>$product->img,
        ];
        session()->put('cart',$cart);
        return redirect('cart')->with('success',"Added to cart");
    }
    public function removefromcart($id)
    {
        $cart=session()->get('cart');

        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart',$cart);
        }
        return redirect('cart')->with('success',"Removed Successfully");
    }
    public function clearcart()
    {
        if (Session()->has('cart'))
        {
            session()->pull('cart');
            return redirect('/cart');
        }
    }
    public function cartaddress(Request $request)
    {
        //return "<h1 style='color:white;background-color:navy'>Welcome to dashboard</h1>";
        $myData = array();
        if (Session()->has('signup'))
        {
            $myData = signup::where('id',"=", Session()->get('signup'))->first();            
        }
        $my=compact('rec');
         return redirect('buy')->with($my);
        //return view('buy', compact('myData'));
    }
    public function removec()
    {
        if(Session()->has('cart'))
        {
            Session()->pull('cart');
            return redirect('prod');
        }
    }
}
