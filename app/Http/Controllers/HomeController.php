<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $products = [], $singleProduct;

    public function home(){
//        $this->products =  Product::allProducts();
        $this->products =  ProductInfo::all();
        return view('home.home',[
            'products' => $this->products
        ]);
    }

    public function productDetails($id){
//        $this->products = Product::allProducts();
//
//        foreach ($this->products as $product){
//            if($product['id'] == $id){
//                $this->singleProduct =  $product;
//            }
//        }
        $this->singleProduct = ProductInfo::find($id);

        return view('product.details',[
                'productDetails'    => $this->singleProduct,
//                'products'          => $this->products
            ]);
    }

    public function dashboard(){
        return view('backend.dashboard.dashboard');
    }
}
