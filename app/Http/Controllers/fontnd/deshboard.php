<?php

namespace App\Http\Controllers\fontnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use auth;
use DB;
use Hash;
use Image;

class deshboard extends Controller
{

	public function __construct()
	{
	 $this->middleware('auth');
	}

//-----user dashboard-----------//
 public function userdashboardmethod(){
 	$adddata=DB::table('invoece')->where('use_id',Auth()->user()->id)->get();
 	$Pending=DB::table('invoece')->where('use_id',Auth()->user()->id)->where('status',0)->get();
 	$processing=DB::table('invoece')->where('use_id',Auth()->user()->id)->where('status',1)->get();
 	$Shiping=DB::table('invoece')->where('use_id',Auth()->user()->id)->where('status',2)->get();
 	$complated=DB::table('invoece')->where('use_id',Auth()->user()->id)->where('status',3)->get();
	return view('fontend.user_dashboard',compact('adddata','Pending','processing','Shiping','complated'));
}

public function all_ordermethod(){
$adddata=DB::table('invoece')->where('use_id',Auth()->user()->id)->get();
	return view('fontend.all_order',compact('adddata'));
}

public function updateinformationmethod(){
	return view('fontend.updateinformation');
}


public function changepasswordnmethod(){
	return view('fontend.changepassword');
}


//----invoice page method---------//
public function invoicemethod($id){
 $adddata=DB::table('invoece')->where('id',$id)->first();
 $data=DB::table('oder_detalis')->where('oder_detalis.invoice_id',$id)
 ->leftjoin('product_information','product_information.id','oder_detalis.product_id')
 ->select('oder_detalis.*','product_information.product_name')
 ->get();
 return view('fontend.invoice_view',compact('adddata','data'));
}



//------user nwe password update--------//
public function userPassChangemethod(Request $req){
	$userPass=Auth()->user()->password;
	$old_Pass=$req->old_password;
	$new_Pass=$req->new_password;
	$con_Pass=$req->confirm_password;

	if(Hash::check($old_Pass,$userPass))
	{
		if($new_Pass===$con_Pass)
		{
			DB::table('users')->where('id',Auth()->user()->id)->update(['password'=>Hash::make($new_Pass)]);
			Auth::logout();
			return redirect('/');
		}
		else
		{
			$notification=array(
				'messege'    =>'Password & Confirm Password Not Maching',
				'alert-type' =>'error'
			);
			return redirect()->back()->with($notification);
		}

	}
	else{
		$notification=array(
			'messege'    =>'Old Password Incorrect',
			'alert-type' =>'error'
		);
		return redirect()->back()->with($notification);
	}
	return redirect()->back();
}


//---------user info update--------//
public function userDataUpdatemethod(Request $id,$req){
	$data = array(
		'name' =>$id->name,
		'phone' =>$id->phone ,
		'address' =>$id->address,
	);

  DB::table('users')->where('id',$req)->update($data);
  $notification=array(
			'messege'    =>'Information Update',
			'alert-type' =>'info'
		);
		return redirect()->back()->with($notification);
}


//------user profile image update---------//
public function profileUpmethod(Request $id,$req){
	$old_img=$id->old_image;
	$new_img=$id->file('image');
	
	if(isset($new_img))
	{
		if(isset($old_img))
		{
   @unlink($old_img);
	 }

	 $image_one_name= hexdec(uniqid()).'.'.$new_img->getClientOriginalExtension();
  Image::make($new_img)->save('public/image/adminimage/'.$image_one_name,80);
  $data['image']='public/image/adminimage/'.$image_one_name;
  DB::table('users')->where('id',$req)->update($data);
}
else
{
	DB::table('users')->where('id',$req)->update(['image'=>$new_img]);
}

$notification=array(
			'messege'   =>'Image Updated',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
}


}
