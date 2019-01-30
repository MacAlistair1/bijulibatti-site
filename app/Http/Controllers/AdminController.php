<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        
        $title = "Bijuli Batti | C-Panel";
        return view('adminpanel')->with('title', $title);
    }

    public function dashboard(){
        $title = "Bijuli Batti | Dashboard";

        return view('dash')->with('title', $title);
        
    }
}
