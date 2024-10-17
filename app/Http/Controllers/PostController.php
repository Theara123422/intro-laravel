<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getHomePage(){
        //logic to show html template
        return view('home');
    }

}
