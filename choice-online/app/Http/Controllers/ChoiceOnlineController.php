<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Session;
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
        Session::put('categoryProducts',$categoryProducts);
        return view('front-end.category.category-product',[
            'categoryProducts'=>$categoryProducts
        ]);
    }

    public function brandProduct($id){
        $brandProducts      =   Product::where('brand_id',$id)
                                        ->where('publication_status',1)
                                        ->get();
        return view('front-end.category.brand-product',compact('brandProducts'));
    }
    public function viewListProduct(){
        $categoryProducts=Session::get('categoryProducts');
        $categories =   Category::where('publication_status',1)->get();
        return view('front-end.category.view-list-product',compact('categoryProducts','categories'));
    }
    public function viewGridProduct(){
        $categoryProducts=Session::get('categoryProducts');
        return view('front-end.category.category-product',compact('categoryProducts'));
    }
    public function productDetails($id){
        $product  =  Product::find($id);
        $topSellsProducts   = DB::table('order_details')
                            ->join('products', 'order_details.product_id','=','products.id')
                            ->select('products.product_image','order_details.product_id','order_details.product_name','order_details.product_price',
                                    DB::raw('count(order_details.product_name) as count'))
                            ->groupBy('order_details.product_id','order_details.product_name','product_price','products.product_image')
                            ->orderBy('count','desc')
                            ->get();
        return view('front-end.category.product-details',compact('product','topSellsProducts'));
    }
}
