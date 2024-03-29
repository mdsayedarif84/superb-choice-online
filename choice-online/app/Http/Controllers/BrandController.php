<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }
    public function saveBrand(Request $request){
        $this->validate($request,
            [
                'brand_name'            =>  'required|unique:brands|regex:/^[a-zA-Z\s]+$/|min:2',
                'brand_description'     =>  'required',
                'publication_status'    =>  'required',
            ],
            [
                'brand_name.required' => 'You have to choose Brand name!',
                'brand_name.regex' => 'Letter & Space only Accepted!',
                'publication_status.required' => 'Please choose type status!',
                'brand_description.required' => 'You have to choose Discription!'
            ]
        );
        $brand                          =   new Brand();
        $brand->brand_name              =   $request->brand_name;
        $brand->brand_description       =   $request->brand_description;
        $brand->publication_status      =   $request->publication_status;
        $brand->save();
        return redirect('/brand/add-brand')->with('message','Brand Info Save Successfully');
    }
    public function manageBrand(){
        $brands     =   Brand::all();
        return view('admin.brand.manage-brand',['brands'=>$brands]);
    }
    public function unpublishedBrand($id){
        $brand      =   Brand::find($id);
        $brand->publication_status=0;
        $brand->save();
        return redirect('/brand/manage-brand')->with('message', 'Brand Info Published Successfully');
    }
    public function publishedBrand($id){
        $brand      =   Brand::find($id);
        $brand->publication_status=1;
        $brand->save();
        return redirect('/brand/manage-brand')->with('message', 'Brand Info Unpublished Successfully');
    }
    public function editBrand($id){
        $brand      =   Brand::find($id);
        return view('admin.brand.edit-brand',['brand'=>$brand]);
    }
    public function updateBrand(Request $request){
        $this->validate($request,
            [
                'brand_name'            =>  'required|regex:/^[a-zA-Z\s]+$/|min:2',
                'brand_description'     =>  'required',
                'publication_status'    =>  'required',
            ],
            [
                'brand_name.required' => 'You have to choose Brand name!',
                'brand_name.regex' => 'Letter & Space only Accepted!',
                'publication_status.required' => 'Please choose type status!',
                'brand_description.required' => 'You have to choose Discription!'
            ]
        );
        $brand                          =   Brand::find($request->brand_id);
        $brand->brand_name              =   $request->brand_name;
        $brand->brand_description       =   $request->brand_description;
        $brand->publication_status      =   $request->publication_status;
        $brand->save();
        return redirect('/brand/manage-brand')->with('message','Brand Info Update Successfully');
    }
    public function deleteBrand($id){
        $brand      =   Brand::find($id);
        $brand->delete();
        return redirect('/brand/manage-brand')->with('message', 'Brand Info Delete Successfully');
    }
}
