<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ChoiceOnlineController extends Controller
{
    public function index(){
        $newProducts        =   Product::where('publication_status',1)
            ->orderBy('id','DESC')
            ->take(8)
            ->get();
       return view('front-end.home.home',
           ['newProducts'=>$newProducts]);
    }
    public function categoryProduct($id){
        $categoryProducts   =   Product::where('category_id',$id)
            ->where('publication_status',1)
            ->get();
        return view('front-end.category.category-product',['categoryProducts'=>$categoryProducts]);
    }
    public function viewListProduct(){
        return view('front-end.category.view-list-product');
    }
    public function productDetails($id){
        $product  =  Product::find($id);
        return view('front-end.category.product-details',compact('product'));
    }
}
