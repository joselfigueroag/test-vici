<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return response()->json($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'brand' => 'required',
            'client' => 'required'
        ];
        $validator = \Validator::make($request->input(),$rules);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all()
            ], 400);
        }
        $product = new Product;
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->client = $request->client;
        $product->save();

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->has('name') ? $request->get('name') : $product->name;
        $product->brand = $request->has('brand') ? $request->get('brand') : $product->brand;
        $product->client = $request->has('client') ? $request->get('client') : $product->client;
        $product->update();

        return response()->json($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        $product = Product::find($id);
        if($product){
            $product->delete();
            return response()->json("Producto eliminado", 200);
        } else {
            return response()->json("Producto no existe", 400);
        }
    }
}
