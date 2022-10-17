<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
//use Intervention\Image\Facades\Image

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.add-product', [
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    protected function productInfoValidate($request)
    {
        $this->validate($request,
            [
                'category_id' => 'required',
                'brand_id' => 'required',
                'product_name' => 'required|unique:products|regex:/^[a-zA-Z\s]+$/|min:2',
                'product_price' => 'required|regex:/^\d*(\.\d{2})?$/',
                'short_description' => 'required',
                'long_description' => 'required',
                'product_quantity' => 'required',
                'publication_status' => 'required',
                'product_image' => 'required',
            ],
            [
                'category_id.required' => 'Pls Select Category name!',
                'brand_id.required' => 'Pls Choose Brand name!',
                'product_name.required' => 'You have to choose Product name!',
                'product_name.regex' => 'Only Use Letter',
                'product_price.required' => 'only number Accepted!',
                'product_quantity.required' => 'Fill up the Quantity!',
                'product_image.required' => 'Select the Image!',
                'publication_status.required' => 'PLs choose type status!',
                'brand_description.required' => 'You have to choose Discription!'
            ]
        );
    }

    protected function productImageUpload($request)
    {
        $productImage = $request->file('product_image');
        $filetype = $productImage->getClientOriginalExtension();
        $imageName = $request->product_name . '.' . $filetype;
        $directory = 'product-image/';
        $imageUrl = $directory . $imageName;
        Image::make($productImage)->resize(250, 200)->save($imageUrl);
        return $imageUrl;
    }

    protected function productBasicSaveInfo($request, $imageUrl)
    {
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
    }

    public function saveProduct(Request $request)
    {
        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->productBasicSaveInfo($request, $imageUrl);
        return redirect('/product/add')->with('message', 'product info save successfully');
    }

    public function manageProduct()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->get();
        return view('admin.product.manage-product', ['products' => $products]);
    }

    public function unpublishedProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();
        return redirect('/product/manage')->with('message', 'Product Info Unpublished Successfully');
    }

    public function publishedProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();
        return redirect('/product/manage')->with('message', 'Product Info published Successfully');
    }
    public function editProduct($id){
        $product            =   Product::find($id);
        $categories         =   Category::where('publication_status',1)->get();
        $brands             =   Brand::where('publication_status',1)->get();
        return view('admin.product.edit-product',[
                'product'=>$product,
                'categories'=>$categories,
                'brands'=>$brands
        ]);

    }
    public function productBasicInfoUpdate($product, $request, $imageUrl=null){
        $product->category_id           =   $request->category_id;
        $product->brand_id              =   $request->brand_id;
        $product->product_name          =   $request->product_name;
        $product->product_price         =   $request->product_price;
        $product->product_quantity      =   $request->product_quantity;
        $product->short_description     =   $request->short_description;
        $product->long_description      =   $request->long_description;
        if ($imageUrl) {
            $product->product_image     =   $imageUrl;
        }
        $product->publication_status    =   $request->publication_status;
        $product->save();
    }
    public function updateProduct(Request $request){
        $productImage   =   $request->file('product_image');
        $product                        =    Product::find($request->product_id);
        if ($productImage){
            unlink($product->product_image);
            $imageUrl                   =   $this->productImageUpload($request);
            $this->productBasicInfoUpdate($product, $request, $imageUrl);
        }else{
            $this->productBasicInfoUpdate($product, $request);
        }
        return redirect('/product/manage')->with('message','Product Info Update Successfully');
    }
    public function deleteProduct($id){
        $product        =   Category::find($id);
        $product->delete();
        return redirect('/product/manage')->with('message','Product Info delete Successfully');

    }
//    public function ShowDetailsProduct($id){
//        $product        = Product::select('products.*')->Where('id','=',$id)->get();
//        //return $product;
//        return view('admin.product.show-details-product',['product'=>$product]);
//    }
}
