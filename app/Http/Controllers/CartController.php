<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : Response
    {
        if(!Session::has("cartid")) {
            return response()->view("cartview.index", ["products" => []]);
        }
        $p = Product::whereIn("id", Session::get("cartid"))->get();
        return response()->view("cartview.index", ["products" => $p]);
    }


    public function addToCart(string $id) : RedirectResponse
    {
        if(!Session::has("cartid")) {
            Session::put("cartid", []);
        }
        Session::put("cartid", array_merge(Session::get("cartid"), [$id]));

        return redirect()->route("cart.index");
    }

    public function removeFromCart(string $id) : RedirectResponse
    {
        if(Session::has("cartid")) {
            $cart = Session::get("cartid");
            $index = array_search($id, $cart);
            if($index !== false) {
                unset($cart[$index]);
                Session::put("cartid", $cart);
            }
        }

        return redirect()->route("cart.index");
    }
    
    public function empty() : RedirectResponse
    {
        
        Session::put("cartid", []);
        return redirect()->route("cart.index");
    }
}
