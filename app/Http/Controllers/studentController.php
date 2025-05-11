<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        return "This is stdlist from control index method";
    }
    
    public function contact_controller($loc)
    {
        return view("contactus", compact('loc'));
    }

    public function about_us_controller(){
        return view("about");
    }
}
