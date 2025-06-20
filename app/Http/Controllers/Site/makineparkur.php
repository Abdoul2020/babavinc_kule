<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class makineparkur extends Controller
{
    
    public function index()
    {
        return view('',);
    }

    public function makineparkurDetails()
    {
        return view('site.makinepakur.details',);

    }
}
