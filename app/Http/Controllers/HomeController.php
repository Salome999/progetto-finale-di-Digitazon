<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ricepe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with(['ricepes' =>Ricepe::all(), 'categories' => Category::all()]);
    }
}
