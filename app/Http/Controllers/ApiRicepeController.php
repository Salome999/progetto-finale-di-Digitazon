<?php

namespace App\Http\Controllers;
use App\Models\Ricepe;
use Illuminate\Http\Request;

class ApiRicepeController extends Controller
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
        return $ricepe;
    }
}

