<?php

namespace App\Providers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front-end.includes.menu',function ($view){
            $view->with('categories', Category::where('publication_status',1)->get());
        });
        //superb products function in home.blade
        View::composer('front-end.home.home',function ($view){
            $view->with('products', Product::where('publication_status',1)
                ->orderBy('id','ASC')
                ->take(6)
                ->get());
        });

        //font-end/category-product blade show for sidebar
        View::composer('front-end.category.category-product',function ($view){
            $view->with('categories', Category::where('publication_status',1)->get());
        });
        //font-end/category-product blade show for sidebar
        View::composer('front-end.category.category-product',function ($view){
            $view->with('brands', Brand::where('publication_status',1)
                ->orderBy('id','DESC')
                ->take(7)
                ->get());
        });
        //front-end/product-details blade show for sidebar
        View::composer('front-end.category.product-details',function ($view){
            $view->with('categories', Category::where('publication_status',1)->get());
        });
        //front-end/footer-menu.blade for function
        View::composer('front-end.includes.footer-menu',function ($view){
            $view->with('brands', Brand::where('publication_status',1)
                ->orderBy('id','DESC')
                ->take(5)
                ->get());
        });
        //front-end/top-header.blade for function
        View::composer('front-end.includes.top-header',function ($view){
            $view->with('carts', Cart::content());
        });
    }
}
