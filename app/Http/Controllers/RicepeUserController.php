<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Ricepe;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use App\Models\RicepeUser;
use Illuminate\Support\Facades\Auth;

class RicepeUserController extends Controller
{
    public function index() {
        return view('search');
    }
    public function store(Request $request)
    {
        $ricepe = Ricepe::find($request->ricepe_id);
        $ricepe->users()->attach($request->user_id);

        return redirect()->route('home')
            ->with('success', ' successfully!');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

   


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostUser  $postUser
     * @return \Illuminate\Http\Response
     */
   
    
}
