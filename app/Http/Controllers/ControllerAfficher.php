<?php

namespace App\Http\Controllers;

use App\Models\modelProf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Data; // Ensure the correct namespace for the Data model
class ControllerAfficher extends Controller
{
   public function afficher()
    {  
        $profs = modelProf::all();                 
        return view('nahida', compact('profs'));
    }
    
}
