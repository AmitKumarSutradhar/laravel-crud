<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $products = [], $singleProduct;

    public function home(){
        $this->products =  Product::allProducts();
        return view('home.home',[
            'products' => $this->products
        ]);
    }

    public function productDetails($id){
        $this->products = Product::allProducts();

        foreach ($this->products as $product){
            if($product['id'] == $id){
                $this->singleProduct =  $product;
            }
        }

        return view('product.details',[
                'productDetails'    => $this->singleProduct,
                'products'          => $this->products
            ]);
    }

    public function dashboard(){
        return view('backend.dashboard.dashboard');
    }
}
