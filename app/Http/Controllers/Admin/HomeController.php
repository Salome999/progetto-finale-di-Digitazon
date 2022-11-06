<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ricepe;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function __construct() 
        {
            $this->middleware('isAdmin');
        }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $ricepes = Ricepe::all();
        $categories = Category::all();
        return view('admin.home')->with(['ricepes' => $ricepes, 'categories' => $categories ]);
    }
    public function create()
    { 
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $ricepe = new Ricepe();
        // dd('ciao');
        $request->validate([
            'name' => 'required',
            'preparation' => 'required',
            'ingredients' => 'required',
            'description' => 'required',
            'category_id' => 'required',
             'time' => 'required',
             
        ]);
        
        if ($request->image) {
            $name = uniqid() . '.' . $request->file('image')->extension();
            $request->image->move(public_path('images/ricepes'), $name);
            $ricepe->image = $name;
        }

        $ricepe->name = $request->name;
        $ricepe->preparation = $request->preparation;
        $ricepe->ingredients = $request->ingredients;
        $ricepe->description = $request->description;
        $ricepe->category_id = $request->category_id;
        $ricepe->time = $request->time;
        $ricepe->save();
     
        return redirect()->back()
            ->with('success', 'Recipe created successfully!');
    }

    public function show(Ricepe $Admin)
    {
        return view('admin.show')->with('ricepe', $Admin);
    }

    public function edit(Ricepe $Admin )
    {
        return view('admin.edit', ['ricepe' => $Admin,]);
    }
    public function update(Request $request, Ricepe $Admin,)
    {

        $request->validate([
            'name' => 'required',
            'preparation' => 'required',
            'ingredients' => 'required',
            'description' => 'required',
            'category_id' => 'required',
             'time' => 'required',
             
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        if ($request->image) {
            $name = uniqid() . '.' . $request->file('image')->extension();
            $request->image->move(public_path('images/ricepes'), $name);
            $Admin->image = $name;
        }
        $Admin->name = $request->name;
        $Admin->preparation = $request->preparation;
        $Admin->ingredients = $request->ingredients;
        $Admin->description = $request->description;
        $Admin->category_id = $request->category_id;
        $Admin->time = $request->time;
        $Admin->save();
        return redirect('/home')->with('success', 'Recipe updated successfully!');
    }
    public function destroy(Ricepe $Admin)
    {   
        $Admin->delete();
       return redirect()->back()->with('success', 'recipe deleted successfully.');
    }
}
?>