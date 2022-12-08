<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brandsModel;
use App\Models\adminModel;

class brandsController extends Controller
{
    //Admin Side
    public function add_brands()
    {
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
       return view('backend.add_brands')->with($admin_data);
    }

    public function insert_brand(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|alpha',
                'logo'=>'required'
            ]
        );
        $get_all_name= brandsModel::where("brand_name",$request['name'])->exists();
        if($get_all_name)
        {
            return  redirect()->back()->with('message', 'Brand Already Exist.')->withInput();
        }
        else
        {
        $brands=new brandsModel;
        $brands->brand_name=$request['name'];
        $fileName= time(). 'brands.' .$request->file('logo')->getClientOriginalExtension();
        $request->file('logo')->move(public_path('backend/images/brand/'), $fileName);
        $brands->brand_logo=$fileName;
        $brands->brand_status=1;
        $brands->save();
        return redirect('/view_brands');
        }
    }
    public function view_brands()
    {
        $brand= brandsModel::all();
        $data = compact('brand');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
       return view('backend.view_brands')->with($data)->with($admin_data);
    }

    public function edit_brand($brand_id)
    {
        $brand= brandsModel::where('brand_id',$brand_id)->get();
        $data = compact('brand');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
       return view('backend.edit_brands')->with($data)->with($admin_data);
    }
    public function update_brand(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|alpha'
            ]
        );
        $brand = brandsModel::where('brand_id',$request['brand_id'])->first();
        $brand->brand_name=$request['name'];
        if($request['logo']!="")
        {
             $fileName= time(). 'brands.' .$request->file('logo')->getClientOriginalExtension();
             $request->file('logo')->move(public_path('backend/images/brand/'), $fileName);
             $brand->brand_logo=$fileName;
        }
        $brand->save();
        return redirect('/view_brands');
    }
    public function delete_brand($brand_id)
    {
        brandsModel::where('brand_id',$brand_id)->delete();
        return redirect()->back();
    }
    public function change_brand_status($brand_id)
    {
        $brand = brandsModel::where('brand_id',$brand_id)->first();
        if( $brand->brand_status == 1)
        {
            $brand->brand_status = 0;
        }
        else
        {
            $brand->brand_status = 1;
        }
        $brand->save();
        return redirect('/view_brands');
    }
}
