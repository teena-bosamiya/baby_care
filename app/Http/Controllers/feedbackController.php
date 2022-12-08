<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedbackModel;
use App\Models\adminModel;

class feedbackController extends Controller
{
    //Client Side
    public function insert_review(Request $request)
    {
        $request->validate(
            [
                'subject'=>'required',
                'review'=>'required'
            ]
        );
        $feedback1=feedbackModel::where('pro_id',$request['pro_id'])->Where('user_id',$request['user_id'])->first();
        if($feedback1!=null)
        {
            $feedback1->feed_sub=$request['subject'];
            $feedback1->feed_messege=$request['review'];
            $feedback1->save();
        }
        else
        {
            $feedback=new feedbackModel;
            $feedback->user_id=$request['user_id'];
            $feedback->pro_id=$request['pro_id'];
            $feedback->feed_sub=$request['subject'];
            $feedback->feed_messege=$request['review'];
            $feedback->save();
        }

        return redirect()->back();
    }
    //Admin Side
    public function view_feedback()
    {
        $feed= feedbackModel::all();
        $data = compact('feed');
        $admin= adminModel::where('admin_id',session()->has('admin_id'))->get();
        $admin_data = compact('admin');
        return view('backend.view_feedback')->with($data)->with($admin_data);
    }
    public function change_feed_status($feed_id)
    {
        $feed = feedbackModel::where('feed_id',$feed_id)->first();
        if( $feed->feed_status == 1)
        {
            $feed->feed_status = 0;
        }
        else
        {
            $feed->feed_status = 1;
        }
        $feed->save();
        return redirect('/view_feedback');
    }
}
