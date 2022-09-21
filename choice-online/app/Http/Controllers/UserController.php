<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use Auth;
Use DB;

class UserController extends Controller{
   public function manageUser(){
      $userId=  Auth::user()->id;
      $authType=  Auth::user()->auth_type;
      if($authType =="user" ){
            $users =DB::table('users')
                     ->where(['id'=>$userId])
                    ->get('users.*');
         return view('admin.user.manage-user',compact('users'));
      }else{
         $users     =   User::all();
         return view('admin.user.manage-user',compact('users'));
      }

   }
}
