<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

class CategoryController extends Controller
{
    public function index()
	{
		$categories = Category::all();
		return view('categories.index', ['categories' => $categories]);
	}

	// public function show($id)
	// {
	// 	$category = Category::findOrFail($id);
	// 	return view('categories.show', ['category' => $category]);
	// }

	public function show(Category $category)
	{
		return view('categories.show', ['category' => $category]);
	}

    public function create()
    {
    	return view('categories.create');
    }

    public function store(Request $request)
    {
    	Category::create( $request->all() );
    	return redirect("categories");
    }

    // public function edit($id)
    // {
    // 	$category = Category::findOrFail($id);
    // 	return view('categories.edit', ['category' => $category]);
    // }
	public function edit(Category $category)
    {
    	$category = Category::findOrFail($id);
    	return view('categories.edit', ['category' => $category]);
    }
	
    // public function update($id, Request $request)
    // {
	// 	$category = Category::findOrFail($id);
	// 	$category->update( $request->all() );
	//    return redirect("categories");
    // }
	public function update(Category $category, Request $request)
    {
		$category->update( $request->all() );
	   	return redirect("categories");
    }

    // public function destroy($id)
    // {
    // 	Category::destroy($id);
    // 	return redirect("categories");
    // }

	public function destroy(Category $category)
    {
		$category->delete();
	    return redirect("categories");
    }

}