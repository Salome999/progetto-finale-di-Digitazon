<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ricepe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contacts')->with(['ricepes' =>Ricepe::all(), 'categories' => Category::all()]);
    }
    
}
