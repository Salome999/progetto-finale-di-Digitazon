<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ricepe;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
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
       $categories = Category::all();
       return view('admin.category.create')->with('categories', $categories);
    }
    public function create()
    { 
        return view('admin.category.create');

    }

    public function store(Request $request)
    {
        $category = new Category();
        // dd('ciao');
        $request->validate([
            'category_name' => 'required',
             
        ]);
        
        $category->category_name = $request->category_name;
        $category->save();
     
        return redirect()->route('home')
            ->with('success', 'Category created successfully!');

    }

    public function show(Category $Admin)
    {
      
    }

    public function edit(Category $Admin )
    {

    }

    public function update(Request $request, Category $Admin,)
    {

    }

    public function destroy(Category $Admin)
    {
     
    }

}
?>