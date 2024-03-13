<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Index
    public function index() {
        $categories = Category::all();
        // return
        return view('category.index', compact('categories'));
    }

    // Create [GET | POST]
    public function create() {
        return view('category.create');
    }

    // Post Create
    public function store(Request $request) {
        $request->validate([
           'category' => 'required|unique:categories|max:25', 
        ]);
        
        // $validated_data = $request->validate([
        //     'category' => 'required|unique:categories|max:25',

        // ]);
        
        $rq_category = $request->all();
        
        $category = new Category($rq_category);

        $category->save();

        return redirect()->action('CategoryController@index');
    }
    
    // Find
    // public function show($id) {

    // }

    // Update [GET | POST]
    public function edit($id) {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'category' => 'required|unique:categories|max:25', 
        ]);

        // $rq_category = $request->all();
        $fd_category = Category::find($id);
        
        $fd_category->category = $request->category;
    
        $fd_category->save();

        return redirect()->action('CategoryController@index');
    }

    // Delete [GET | POST]

    // Find
}
