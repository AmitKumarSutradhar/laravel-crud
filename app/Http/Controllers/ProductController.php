<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductInfo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $products = [];

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
        $product = ProductInfo::find($id);
        if (file_exists($product->image)){
            unlink($product->image);
        }
        $product->delete();
        return back()->with('success','Product deleted successfully.');
    }
}
