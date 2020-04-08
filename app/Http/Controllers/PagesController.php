<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{
    public function about(){

        return view('pages/aboutme');

    }

    public function contact(){

        return view('pages/contact');

    }

}
