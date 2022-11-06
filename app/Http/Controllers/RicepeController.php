<?php

namespace App\Http\Controllers;

use App\Models\Ricepe;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class RicepeController extends Controller

{
    public function index() {   
        $ricepes = Ricepe::all();
        
        foreach($ricepes as $ricepe) {
            $ricepe->category;
            
         } 
        return $ricepes;
    }
        
    public function show(Ricepe $ricepe)
    {
         return view('ricepes.show')->with('ricepe', $ricepe);
        
    }
    
   
}
