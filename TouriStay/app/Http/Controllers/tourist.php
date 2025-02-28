<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tourist extends Controller
{
    public function index()
    {
        return view('tourist.Profile');
    }
}
