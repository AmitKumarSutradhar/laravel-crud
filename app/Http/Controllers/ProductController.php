<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductInfo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $products = [], $product;

    public function create(){
        return view('backend.products.create');
    }

    public function store(Request $request){
        ProductInfo::storeProduct($request);
        return back()->with('success','Product created successfully');
    }

    public function manage(){
        $this->products =  ProductInfo::all();
        return view('backend.products.manage',[
            'products'   => $this->products
            ]);
    }

    public function destroy($id){
        $this->product = ProductInfo::find($id);
        if (file_exists($this->product->image)){
            unlink($this->product->image);
        }
        $this->product->delete();
        return back()->with('success','Product deleted successfully.');
    }

    public function edit($id){
        $this->product = ProductInfo::find($id);
        return view('backend.products.edit',[
            'product' => $this->product
        ]);
    }

    public function update(Request $request, $id)
        {
            ProductInfo::updateProduct($request, $id);
            return redirect()->route('products.manage')->with('success','Product updated successfully.');
        }
}
