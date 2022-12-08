<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminModel;

class adminController extends Controller
{
    public function index()
    {
       return view('backend.index');
    }
    public function admin_login(Request $request)
    {
        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
            ]
        );

        $email=adminModel::where('admin_email','=',$request->email)->first();
        if(!$email)
        {
            return back()->with('email','fail');
        }
        else
        {
            if($request->password==$email->admin_psw)
            {
                $request->session()->put('admin_id',$email->admin_id);
                return redirect('add_category');
            }
            else
            {
                return view('backend.index');
            }
        }
    }
    public function add_new_admin()
    {
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
       return view('backend.add_admin')->with($admin_data);
    }
    public function view_admin()
    {
        $admin1= adminModel::all();
        $data = compact('admin1');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
        return view('backend.view_admin')->with($data)->with($admin_data);
    }
    public function insert_new_admin(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|alpha',
                'email'=>'required|email',
                'phone'=>'required|numeric',
                'password'=>'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'address1'=>'required',
                'address2'=>'required',
                'city'=>'required|alpha',
                'state'=>'required|alpha',
                'pincode'=>'required|numeric',
                'answer'=>'required'
            ]
        );
        $admin=new adminModel;
        $get_all_name= adminModel::where("admin_email",$request['email']);
        if($get_all_name!="")
        {
            return  redirect()->back()->with('message', 'Admin Email Already Exist.')->withInput();
        }
        else
        {
        $admin->admin_name=$request['name'];
        $admin->admin_email=$request['email'];
        $admin->admin_phone=$request['phone'];
        $admin->admin_psw=$request['password'];

        if($request->file('image')=="")
        {
            $admin->admin_pic="";
        }
        else
        {
            $fileName= time(). 'baby_care_admin.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('backend/images/admin/'), $fileName);
            $admin->admin_pic=$fileName;
        }
        $admin->admin_address_line1=$request['address1'];
        $admin->admin_address_line2=$request['address2'];
        $admin->admin_city=$request['city'];
        $admin->admin_state=$request['state'];
        $admin->admin_pin_code=$request['pincode'];
        $admin->admin_varification_question=$request['question'];
        $admin->admin_varification_answer=$request['answer'];
        $admin->admin_status=1;
        $admin->save();
        return redirect('/view_admin');
    }
    }
    public function edit_admin()
    {
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
       return view('backend.profile')->with($admin_data);
    }
    public function update_admin(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|alpha',
                'email'=>'required|email',
                'phone'=>'required|numeric',
                'address1'=>'required',
                'address2'=>'required',
                'city'=>'required|alpha',
                'state'=>'required|alpha',
                'pincode'=>'required|numeric'
            ]
        );
        $admin = adminModel::where('admin_id',$request['admin_id'])->first();
        $admin->admin_name=$request['name'];
        $admin->admin_email=$request['email'];
        $admin->admin_phone=$request['phone'];

        if($request->file('image')!="")
        {
            $fileName= time(). 'baby_care_admin.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('backend/images/admin/'), $fileName);
            $admin->admin_pic=$fileName;
        }
        $admin->admin_address_line1=$request['address1'];
        $admin->admin_address_line2=$request['address2'];
        $admin->admin_city=$request['city'];
        $admin->admin_state=$request['state'];
        $admin->admin_pin_code=$request['pincode'];
        $admin->save();
        return redirect('/view_admin');
    }

    //password change

    public function forgot_password_admin()
    {
       return view('backend.forgot_password');
    }
    public function verify_admin(Request $request)
    {
        $request->validate(
            [
                'email'=>'required|email',
                'answer'=>'required'
            ]
        );
        $admin= adminModel::where('admin_email',$request['email'])->where('admin_varification_question',$request['question'])->where('admin_varification_answer',$request['answer'])->first();
        if($admin==null)
        {
            session()->flash('message1', 'Your Details are not matched.');
            return redirect()->back();
        }
        else
        {
            $admin1= adminModel::where('admin_email',$request['email'])->first();
            $data = compact('admin1');
            return view('backend.reset_password')->with($data);
        }
    }

    public function update_admin_password(Request $request)
    {
        $request->validate(
            [
                'confirmpassword'=>'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'password'=>'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
            ]
        );
        $admin1=adminModel::where('admin_email',$request['admin_email'])->first();
        if($request->password == $request->confirmpassword)
        {

            $admin1->admin_psw=$request['password'];
            $admin1->save();
            session()->flash('message3', 'Password Updated Successfully');
            return view('backend.index');
        }
        else
        {
            $data = compact('admin1');
            session()->flash('message2', 'Both Password Must Be Same.');
            return view('backend.reset_password')->with($data);
        }

    }
}
