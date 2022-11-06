<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Ricepe;
class UserController extends Controller
{
    /**
     * Get all favorite posts by user
     *
     * @return Response
     */
   
    // public function index()
    // {
    //     $favorites = Auth::user()->favorites;

    //     return view('users.favorites', compact('favorites'));
    // }

    public function store(Request $request)
    {
       Auth::user()->likes()->attach(Ricepe::find($request->ricepe_id));

        return redirect()->back();
    }
}