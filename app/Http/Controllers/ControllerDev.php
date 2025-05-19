<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDev extends Controller
{  
    public function index()
    {  
        return view('dev'); // Ensure 'dev' is the correct view name
    }
    
    
}

