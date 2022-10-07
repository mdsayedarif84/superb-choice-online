<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    protected function validationCategory($request){
        $this->validate($request,
            [
                'category_name' => 'required|unique:categories|regex:/^[a-zA-Z\s]+$/',
                'publication_status' => 'required',
                'category_description' => 'required'
            ],
            [
                'category_name.required' => 'You have to choose category name!',
                'category_name.regex' => 'Letter & Space only Accepted!',
                'publication_status.required' => 'Please choose type status!',
                'category_description.required' => 'You have to choose Discription!'
            ]
        );
    }
    public function saveCategoryInfo(Request $request){
        $this->validationCategory($request);
        $category                           =   new Category();
        $category->category_name            =   $request->category_name;
        $category->category_description     =   $request->category_description;
        $category->publication_status       =   $request->publication_status;
        $category->save();
        return redirect('/category/manage-category')->with('message','Category Info Save Successfully');
    }
    public function manageCategoryInfo(){
        $categories     =   Category::all();
        return view('admin.category.manage-category',['categories'=>$categories]);
    }
    public function unpublishedCategory($id){
        $category       =   Category::find($id);
        $category->publication_status   =   0;
        $category->save();
        return redirect('/category/manage-category')->with('message','Category info unpublished successfully');
    }
    public function publishedCategory($id){
        $category       =   Category::find($id);
        $category->publication_status   =   1;
        $category->save();
        return redirect('/category/manage-category')->with('message', 'Category Info Published Successfully');

    }
    public function editCategory($id){
        $category   =   Category::find($id);
        return view('admin.category.edit-category',['category'=>$category]);
    }
    public function updateCategory(Request $request){
        $this->validate($request,
            [
                'category_name' => 'required|regex:/^[a-zA-Z\s]+$/',
                'publication_status' => 'required',
                'category_description' => 'required'
            ],
            [
                'category_name.required' => 'You have to choose category name!',
                'category_name.regex' => 'Letter & Space only Accepted!',
                'publication_status.required' => 'Please choose type status!',
                'category_description.required' => 'You have to choose Discription!'
            ]
        );
        $categoryById                           =   Category::find($request->category_id);
        $categoryById->category_name            =   $request->category_name;
        $categoryById->category_description     =   $request->category_description;
        $categoryById->publication_status       =   $request->publication_status;
        $categoryById->save();
        return redirect('/category/manage-category')->with('message','Category Info Update Successfully');
    }
    public function deleteCategory($id){
        $category       =   Category::find($id);
        $category->delete();
        return redirect('/category/manage-category')->with('message', 'Category Info Delete Successfully');
    }
}
