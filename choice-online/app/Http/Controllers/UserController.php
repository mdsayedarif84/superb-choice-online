<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use Auth;
Use DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller{
   public function manageUser(){
   // First way get data
      // $userId=  Auth::user()->id;
      // $authType=  Auth::user()->auth_type;
      // if($authType =="user" ){
      //       $users =DB::table('users')
      //                ->where(['id'=>$userId])
      //                ->get('users.*');
      //                //dd($users);
      //    return view('admin.user.manage-user',compact('users'));
      // }else{
      //    $users     =   User::all();
      //    return view('admin.user.manage-user',compact('users'));
      // }
         // 2nd way get data
         //this session is catch in vendor/laravel/ui/auth-backend/AuthenticatesUsers.php
         //protected function authenticated function session put
      $userId=Session::get('userId');
      $user =User::where('id',$userId)->get()->first();
      if($user->auth_type =="user" ){
         $users =User::where('id',$user->id)->get();
            // $users =$user;
         return view('admin.user.manage-user',compact('users'));
      }else{
         $users     =   User::all();
         return view('admin.user.manage-user',compact('users'));
      }
   }
}
