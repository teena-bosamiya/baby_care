<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brandsModel;
use App\Models\categoryModel;

class homeController extends Controller
{
    public function index()
    {
        $brand= brandsModel::where('brand_status',1)->get();
        $data = compact('brand');
        $category= categoryModel::where('cat_status',1)->get();
        $cat_data = compact('category');
        return view('frontend.index')->with($data)->with($cat_data);
    }
}
