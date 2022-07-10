<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.index');
    }

    public function home(){
        return view('layouts.home');
    }

    public function about(){
        return view('layouts.about');
    }

    public function contact(){
        return view('layouts.contact');
    }
}
