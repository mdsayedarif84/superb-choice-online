<?php

namespace App\Http\Controllers;

use App\Models\Order_detail;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $totals = [
            'users'     => DB::table('users')->count(),
            'customers' => DB::table('customers')->count(),
            'categories' => DB::table('categories')->count()
        ];
        // $totalSells         =   DB::table('order_details')->select('order_details.*')->get();
        $totalSells         =   Order_detail::all();
            $sum = 0;
            foreach( $totalSells as $totalSell ){
                $total =$totalSell->product_price* $totalSell->product_quantity;
                $sum = $sum+$total;
            }
        $users  =   User::select(DB::raw('COUNT(*) as count'))
                            ->whereYear('created_at',date('Y'))
                            ->groupBy(DB::raw('Month(created_at)'))
                            ->pluck('count');
        $months =   User::select(DB::raw('Month(created_at) as month'))
                            ->whereYear('created_at',date('Y'))
                            ->groupBy(DB::raw('Month(created_at)'))
                            ->pluck('month');
        $datas  =   array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index=> $month){
            $datas[$month]  =   $users[$index] ;
        }
                            // return $datas;
        // $totalProductName   =  Order_detail::select('order_details.product_name',DB::raw('COUNT(product_name) as count', 'product_name'))
        //                     ->groupBy('product_name')
        //     		        ->orderBy('count', 'DESC')
        //                      ->get();
        // $sales = Order_detail::select('order_details.*', DB::raw('count(product_name) as name'))
        //         ->join('products', 'order_details.product_id', '=', 'products.id')
        //         ->groupBy('products.id')
        //         ->orderBy('name', 'DESC')
        //         ->get();

        // $sales = DB::table('order_details')
        //                 ->select('order_details.product_name',DB::raw('count(product_name) as count','product_name'))
        //                 ->groupBy('product_name')
        //                 ->orderBy('count','desc')
        //                 ->get();
                    // return $sales;
        return view('admin.home.home',compact('totals','totalSells','datas'));
    }
}
