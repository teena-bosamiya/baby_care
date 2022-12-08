<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cartModel;
use App\Models\productModel;
use App\Models\adminModel;
use App\Models\userDetailsModel;
use Illuminate\Support\Facades\DB;

class cartController extends Controller
{
    public function cart()
    {
        return view('frontend/cart');
    }
    public function addToCart(Request $request)
    {
        $product = productModel::findOrFail($request->pro_id);

        $cart = session()->get('cart', []);

        if(isset($cart[$request->pro_id])) {
            $cart[$request->pro_id]['quantity']=$request->quantity;
            session()->flash('success', 'Cart successfully updated!');
        }  else {
            $cart[$request->pro_id] = [
                "name" => $product->pro_name,
                "image" => $product->pro_img,
                "price" => $product->pro_price,
                "quantity" => $request->quantity
            ];
        }

        session()->put('cart', $cart);
        return redirect('cart');
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
            return redirect('cart');
        }
    }
    //view cart
    public function view_client_cart()
    {
        $cart= cartModel::where('user_id',session('user_id'))->get();
        $cart_arr = array();

        foreach($cart as $key => $val) {
            $data = $val->pro_id;
            $data_arr = explode(',', $data);

            $arr['total_price'] = $val->total_price;
            $arr['cart_date'] = $val->created_at;
            $str = '';
            for($i = 0; $i < count($data_arr); $i++) {
                if(!empty($data_arr[$i])) {
                    $data_arr_qty = explode('-', $data_arr[$i]);
                    $prduct_name = productModel::where('pro_id', $data_arr_qty['0'])->first();
                    $str .= $prduct_name->pro_name.' - '.$data_arr_qty['1'].',';
                }
            }

            $arr['product'] = rtrim($str, ',');
            $cart_arr[] = $arr;

        }
        $cart_arr = compact('cart_arr');

        return view('frontend.view_cart')->with($cart_arr);
    }

    //place order
    public function buyCart(Request $request)
    {
        if (!$request->session()->has('user_id'))
        {
            return view('frontend.login');
        }
        elseif(session()->get('cart')=="")
        {
            return redirect('product');
        }
        else
        {
            $cart=new cartModel;
            $cart->user_id=$request->session()->get('user_id');
            $cart->pro_id=$request->id;
            $cart->total_price=$request->total;
            $cart->save();
            $cart = session()->get('cart');
            session()->forget('cart');
            session()->flash('success', 'We deliver your product in 7 days at your registered address.');
            return redirect('cart');
        }
   }
   //admin side
   public function view_cart()
    {
        $cart= cartModel::all();
        $cart_arr = array();

        foreach($cart as $key => $val) {
            $data = $val->pro_id;
            $data_arr = explode(',', $data);

            $arr['cart_id'] = $val->cart_id;
            $row = DB::select('SELECT u.* from cart c, user_details u WHERE '.$val->user_id.' = u.user_id and c.cart_id = '.$val->cart_id.' limit 1');
            $arr['user_id'] = $val->user_id;
            $arr['user_email'] = $row[0]->user_email;
            $arr['total_price'] = $val->total_price;

            $str = '';
            for($i = 0; $i < count($data_arr); $i++) {
                if(!empty($data_arr[$i])) {
                    $data_arr_qty = explode('-', $data_arr[$i]);
                    $prduct_name = productModel::where('pro_id', $data_arr_qty['0'])->first();
                    $str .= $prduct_name->pro_name.'-'.$data_arr_qty['1'].',';
                }
            }

            $arr['product'] = rtrim($str, ',');
            $cart_arr[] = $arr;
        }

        $data = compact('cart');

        $user_email= userDetailsModel::all();
        $user_email1 = compact('user_email');

        $product_name = productModel::all();
        $product_name1 = compact('product_name');

        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
        $cart_arr = compact('cart_arr');

        return view('backend.view_cart')->with($data)->with($admin_data)->with($user_email1)->with($product_name1)->with($cart_arr);
    }
}
