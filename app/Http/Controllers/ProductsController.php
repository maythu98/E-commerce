<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
    	return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);
    }

    public function create()
    {
        $categories = Category::pluck('name' ,'id')->all();
    	return view('products.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $name1 = $request->image1->getClientOriginalName();
        $name2 = $request->image2->getClientOriginalName();
        $name3 = $request->image3->getClientOriginalName();
        $name4 = $request->image1->getClientOriginalName();
        $name1 = $request->image1->move('uploads', $request->image1->getClientOriginalName());
        $name2 = $request->image2->move('uploads', $request->image2->getClientOriginalName());
        $name3 = $request->image3->move('uploads', $request->image3->getClientOriginalName());
        $name4 = $request->image4->move('uploads', $request->image4->getClientOriginalName());
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image1' => $name1,
            'image2' => $name2,
            'image3' => $name3,
            'featured_image' => $name4,
            'is_featured' => $request->is_featured
        ]);
        $product->categories()->sync( $request->category_id);
        return redirect("products");
        // $product = Product::create( $request->all() );
        // $product->categories()->sync( $request->category_id);
    	// return redirect("products");
    }
    
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::pluck('name' ,'id')->all();
        $selected_list = $product->categories()->pluck('id')->all();
        return view('products.edit', 
            ['product' => $product, 
            'categories' => $categories,
            'selected_list'=> $selected_list
            ]);
    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $product->categories()->sync( $request->category_id );
        $product->update( $request->all() );
        return redirect('products');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect("products");
    }

}