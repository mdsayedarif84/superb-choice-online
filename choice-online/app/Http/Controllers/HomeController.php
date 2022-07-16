<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
            'users'=> DB::table('users')->count(),
            'customers'=> DB::table('customers')->count()
        ];
    $totalSells     =   DB::table('order_details')->select('order_details.*')->get();
    // return $totalSells;
        return view('admin.home.home',compact('totals','totalSells'));
    }
}
