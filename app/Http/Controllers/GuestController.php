<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){

        return view('guest-view.homepage');
    }

    public function category(){

        return view('guest-view.category');
    }
}
