<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\categoryModel;
use App\Models\brandsModel;
use App\Models\userDetailsModel;
use App\Models\adminModel;
use App\Models\feedbackModel;

class productController extends Controller
{
    public function product()
    {
        $product= productModel::where("pro_status",1)->get();
        $data = compact('product');
        return view('frontend.product')->with($data);
    }
    public function cat_product($cat_id)
    {
        $product= productModel::where('cat_id',$cat_id)->where("pro_status",1)->get();
        $data = compact('product');
        return view('frontend.product')->with($data);
    }
    public function brand_product($brand_id)
    {
        $product= productModel::select("*")
        ->where("brand_id", $brand_id)->where("pro_status",1)
        ->get();
        $data = compact('product');
        return view('frontend.product')->with($data);
    }
    public function product_details_view($pro_id)
    {
        $product= productModel::where("pro_id", $pro_id)->where("pro_status",1)->get();
        $data = compact('product');
        $feedback= feedbackModel::where('pro_id',$pro_id)->orderBy('updated_at', 'DESC')->where("feed_status",1)->get();
        $feed_data = compact('feedback');
        $user= userDetailsModel::all();
        $user_data = compact('user');
        return view('frontend.product_details')->with($data)->with($feed_data)->with($user_data);
    }

    //Admin Side
    public function add_product()
    {
        $category= categoryModel::all();
        $cat_data = compact('category');
        $brands= brandsModel::all();
        $data = compact('brands');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
        return view('backend.add_product')->with($cat_data)->with($data)->with($admin_data);
    }
    public function insert_product(Request $request)
    {
      $request->validate(
         [
             'name'=>'required',
             'image'=>'required',
             'price'=>'required|numeric',
             'unit'=>'required|numeric',
             'details'=>'required'
         ]
     );
     $get_all_name= productModel::where("pro_name",$request['name'])->exists();
     if($get_all_name)
     {
         return  redirect()->back()->with('message', 'product Name Already Exist.')->withInput();
     }
     else
     {
       $product=new productModel;
       $product->cat_id=$request['cat_id'];
       $product->brand_id=$request['brand_id'];
       $product->pro_name=$request['name'];
       $product->pro_price=$request['price'];
       $fileName= time(). 'product.' .$request->file('image')->getClientOriginalExtension();
       $request->file('image')->move(public_path('backend/images/product/'), $fileName);
       $product->pro_img=$fileName;
       $product->pro_unit=$request['unit'];
       $product->pro_description=$request['details'];
       $product->pro_status=1;
       $product->save();
       return redirect('/view_product');
     }
    }
    public function view_product()
    {
        $product= productModel::all();
        $data = compact('product');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
        return view('backend.view_product')->with($data)->with($admin_data);
    }
    public function edit_product($pro_id)
    {
        $product= productModel::where('pro_id',$pro_id)->get();
        $data = compact('product');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
        return view('backend.edit_product')->with($data)->with($admin_data);
    }
    public function update_product(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'price'=>'required|numeric',
                'unit'=>'required|numeric',
                'details'=>'required'
            ]
        );
        $product = productModel::where('pro_id',$request['pro_id'])->first();
        $product->pro_name=$request['name'];
        $product->pro_price=$request['price'];
        if($request['image']!="")
        {
            $fileName= time(). 'product.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('backend/images/product/'), $fileName);
            $product->pro_img=$fileName;
        }
        $product->pro_unit=$request['unit'];
        $product->pro_description=$request['details'];
        $product->save();
        return redirect('/view_product');
    }
    public function delete_product($pro_id)
    {
        productModel::where('pro_id',$pro_id)->delete();
        return redirect()->back();
    }
    public function change_pro_status($pro_id)
    {
        $product = productModel::where('pro_id',$pro_id)->first();
        if( $product->pro_status == 1)
        {
            $product->pro_status = 0;
        }
        else
        {
            $product->pro_status = 1;
        }
        $product->save();
        return redirect('/view_product');
    }
}
