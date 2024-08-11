<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        //return view('products.index');
        $products= Product::all();
        return view('products.index', ['products'=> $products]);
    }

    public function createPage(){
        return view('products.create');
    }

    public function saveOne(Request $request){
        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));

    }

    public function editOne(Product $product){
        //dd($product);
        return view('products.edit', ['product' => $product]);
    }

    public function updateOne(Product $product,Request $request ){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Succesffully');
    }

    public function destroy(Product $product){
            $product->delete();
        return redirect(route('product.index'))->with('success', 'Product DELETED Succesffully');
    }


}
