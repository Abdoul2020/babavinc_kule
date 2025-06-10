<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $products = Room::all();
        
        return view('site.index', [
            'products' => $products,
        ]);
    }
}
