<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userDetailsModel;
use App\Models\adminModel;

class userController extends Controller
{
    public function user_login_view()
    {
       return view('frontend.login');
    }
    public function user_login(Request $request)
    {
       $request->validate(
           [
               'email'=>'required|email',
               'password'=>'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
           ]
       );
       $email=userDetailsModel::where('user_email','=',$request->email)->where("user_status",1)->first();
        if(!$email)
        {
            return back()->with('email','fail')->with('message1', 'Invalid user email id.')->withInput();
        }
        else
        {
            if($request->password==$email->user_psw)
            {
                $request->session()->put('user_id',$email->user_id);
                return redirect('product');
            }
            else
            {
               return  redirect()->back()->with('message1', 'Invalid Username And Password.')->withInput();
            }
        }
    }


    public function user_register_view()
    {
       return view('frontend.register');
    }
    public function user_register(Request $request)
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
                'pincode'=>'required|numeric|min:6',
                'answer'=>'required'
            ]
        );
        $get_all_name= userDetailsModel::where("user_email",$request['email'])->exists();
        if($get_all_name)
        {
            return  redirect()->back()->with('message', 'user Email Already Exist.')->withInput();
        }
        else
        {
        $user=new userDetailsModel;
        $user->user_name=$request['name'];
        $user->user_email=$request['email'];
        $user->user_phone=$request['phone'];
        $user->user_psw=$request['password'];

        if($request->file('image')=="")
        {
            $user->user_pic="";
        }
        else
        {
            $fileName= time(). 'baby_bare_user.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('backend/images/user/'), $fileName);
            $user->user_pic=$fileName;
        }
        $user->user_address_line1=$request['address1'];
        $user->user_address_line2=$request['address2'];
        $user->user_city=$request['city'];
        $user->user_state=$request['state'];
        $user->user_pin_code=$request['pincode'];
        $user->user_varification_question=$request['question'];
        $user->user_varification_answer=$request['answer'];
        $user->user_status=1;
        $user->save();
        return redirect('/user_login')->with('success_message', 'Registerd Successfully.');
    }
    }
    public function forgot_password()
    {
       return view('frontend.forgot_password');
    }
    public function verify_user(Request $request)
    {
        $request->validate(
            [
                'email'=>'required|email',
                'answer'=>'required'
            ]
        );
        $user= userDetailsModel::where('user_email',$request['email'])->where('user_varification_question',$request['question'])->where('user_varification_answer',$request['answer'])
        ->where("user_status",1)->first();
        if($user==null)
        {
            session()->flash('message1', 'Your Details are not matched.');
            return redirect()->back();
        }
        else
        {
            $user1= userDetailsModel::where('user_email',$request['email'])->where("user_status",1)->first();
            $data = compact('user1');
            return view('frontend.reset_password')->with($data);
        }
    }

    public function update_password(Request $request)
    {
        $request->validate(
            [
                'confirmpassword'=>'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'password'=>'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
            ]
        );
        $user1=userDetailsModel::where('user_email',$request['user_email'])->where("user_status",1)->first();
        if($request->password == $request->confirmpassword)
        {

            $user1->user_psw=$request['password'];
            $user1->save();
            return redirect('user_login')->with('message1', 'Password Changed Successfully.');
        }
        else
        {
            $data = compact('user1');
            session()->flash('message2', 'Both Password Must Be Same.');
            return view('frontend.reset_password')->with($data);
        }

    }





    //Admin Side
    public function view_users()
    {
        $user= userDetailsModel::all();
        $data = compact('user');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
        return view('backend.view_users')->with($data)->with($admin_data);
    }
    public function change_user_status($user_id)
    {
        $user = userDetailsModel::where('user_id',$user_id)->first();
        if( $user->user_status == 1)
        {
            $user->user_status = 0;
        }
        else
        {
            $user->user_status = 1;
        }
        $user->save();
        return redirect('/view_users');
    }
}
