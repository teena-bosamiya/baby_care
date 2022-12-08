<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactModel;
use App\Models\adminModel;

class contactController extends Controller
{
    public function index()
    {
       return view('frontend.contact');
    }
    public function insert_contact_info(Request $request)
    {
       $request->validate(
           [
               'name'=>'required|alpha',
               'email'=>'required|email',
               'messege'=>'required',
               'subject'=>'required'
           ]
       );
       $contact=new contactModel;
       $contact->con_name=$request['name'];
       $contact->con_email=$request['email'];
       $contact->con_sub=$request['subject'];
       $contact->con_messege=$request['messege'];
       $contact->save();
       return redirect()->back()->with('message', 'Thank You For Contacting Us');
    }
    //Admin Side
    public function view_contact()
    {
        $contact= contactModel::all();
        $data = compact('contact');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
       return view('backend.view_contact')->with($data)->with($admin_data);
    }
}
