<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class order extends Controller
{
  public function customer_ordermethod(){

  	$adddata=DB::table('invoece')->get();
  	return view('backend.order_info.customer_info',compact('adddata'));
  }


  public function update_ordermethod(Request $Req, $id)
  {
  DB::table('invoece')->where('id',$id)->update(['status'=>$Req->status]);

  $notification=array(
			'messege'    =>'Order  Successfully',
			'alert-type' =>'success'
		);
  return redirect()->back()->with($notification);
  }

}
