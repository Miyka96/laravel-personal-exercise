<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'img' => 'required|url',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'size'=> 'required|string',
                'sustainability' => 'required|boolean'
            ]
        );

        $data = $request->all();
        $newProduct = new Product();

        $newProduct->name = $data['name'];
        $newProduct->img = $data['img'];
        $newProduct->description = $data['description'];
        $newProduct->price = $data['price'];
        $newProduct->size = $data['size'];
        $newProduct->sustainability = $data['sustainability'];

        $newProduct->save();

        return redirect()->route('product.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $products = Product::findOrFail($id);
        } catch (\Exception $e) {
            return view('404');
        }

        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'img' => 'required|url',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'size'=> 'required|string',
                'sustainability' => 'required|boolean'
            ]
        );

        $data = $request->all();
        $product->update($data);
        return redirect()->route('product.show',$product->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
