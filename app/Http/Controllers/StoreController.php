<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function store()
    {
        $store = Store::all();
        return $store;
    }
}
