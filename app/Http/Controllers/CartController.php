<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function insert(Request $request)
    {
        Cart::create($request->all());
    }
}
