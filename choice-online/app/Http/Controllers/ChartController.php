<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ChartController extends Controller{
    public function userChart(){
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
        return view('admin.chart.highChart',compact('datas'));
    }
}
