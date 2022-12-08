<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryModel;
use App\Models\adminModel;
class categoryController extends Controller
{

    //Admin Side
    public function add_category()
    {
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
       return view('backend.add_category')->with($admin_data);
    }
    public function insert_category(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'image'=>'required'
            ]
        );
        $get_all_name= categoryModel::where("cat_name",$request['name'])->exists();
        if($get_all_name)
        {
            return  redirect()->back()->with('message', 'Category Name Already Exist.')->withInput();
        }
        else
        {
            $category=new categoryModel;
            $category->cat_name=$request['name'];
            $fileName= time(). 'category.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('backend/images/category/'), $fileName);
            $category->cat_img=$fileName;
            $category->cat_status=1;
            $category->save();
            return redirect('/view_category');
        }
    }
    public function edit_category($cat_id)
    {
        $category= categoryModel::where('cat_id',$cat_id)->get();
        $data = compact('category');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
       return view('backend.edit_category')->with($data)->with($admin_data);
    }
    public function update_category(Request $request)
    {
        $request->validate(
            [
                'name'=>'required'
            ]
        );
        $category = categoryModel::where('cat_id',$request['cat_id'])->first();
            $category->cat_name=$request['name'];
            if($request['image']!="")
            {
                $fileName= time(). 'category.' .$request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('backend/images/category/'), $fileName);
                $category->cat_img=$fileName;
            }
            $category->save();
            return redirect('/view_category');
    }
    public function view_category()
    {
        $category= categoryModel::all();
        $data = compact('category');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
        return view('backend.view_category')->with($data)->with($admin_data);
    }
    public function delete_category($cat_id)
    {
        categoryModel::where('cat_id',$cat_id)->delete();
        return redirect()->back();
    }
    public function change_cat_status($cat_id)
    {
        $category = categoryModel::where('cat_id',$cat_id)->first();
        if( $category->cat_status == 1)
        {
            $category->cat_status = 0;
        }
        else
        {
            $category->cat_status = 1;
        }
        $category->save();
        return redirect('/view_category');
    }
}
