<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Product::where('is_active', true)->get();
        return view('admin.productos.index', compact('productos'));
    }

    public function create()
    {
        return view('admin.productos.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->is_active = true;

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = $request->input('name').'_'.time().'.'.$image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('products', $imageName, 'public');
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('productos.index');
    }


}
