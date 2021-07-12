<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // prendere dati

        // restituire una view
        return view('welcome');
    }
}
