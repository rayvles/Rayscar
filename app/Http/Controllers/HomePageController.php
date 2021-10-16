<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    // Home
    public function index(){
        return view('home');
    }
}
