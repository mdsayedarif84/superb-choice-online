<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;

class ChoiceOnlineController extends Controller
{
    public function index(){
        $newProducts    =   Product::where('publication_status',1)
                                ->orderBy('id','DESC')
                                ->take(8)
                                ->get();

    $topSellsProducts   = DB::table('order_details')
                            ->join('products', 'order_details.product_id','=','products.id')
                            ->select('products.product_image','order_details.product_id','order_details.product_name','order_details.product_price',
                                    DB::raw('count(order_details.product_name) as count'))
                            ->groupBy('order_details.product_id','order_details.product_name','product_price','products.product_image')
                            ->orderBy('count','desc')
                            ->take(3)
                            ->get();
                         //return $topSellsProducts;
       return view('front-end.home.home',[
           'newProducts'=>$newProducts,
           'topSellsProducts'=>$topSellsProducts
        ]);
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
