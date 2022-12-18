<?php

namespace App\Http\Controllers\fontnd;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Mail;

class userMessage extends Controller
{
 
 public function sent_massagmethod(Request $a){
	$id = IdGenerator::generate(['table' => 'user_message', 'length' =>15, 'prefix' =>'USER_MESS-']);
	$data= array(
	 'id'         =>$id,
	 'user_name'  =>$a->user_name,
	 'email'      =>$a->email,
	 'phone'      =>$a->phone,
	 'message'    =>$a->message,
	);
	DB::table('user_message')->insert($data);
	$notification=array(
	 'messege'    =>'Item Added Successfully',
	 'alert-type' =>'success'
	);
	return Redirect()->back()->with($notification);
 }


 public function Messagemethod(){
	$massagedata=DB::table('user_message')->get();
	return view('backend.customer_message.customer_message', compact('massagedata'));
 }

 public function delMessmethod($id){
	DB::table('user_message')->where('id',$id)->delete();
	$notification=array(
	 'messege'   =>'Customer Massage Delete',
	 'alert-type'=>'error'
	);
	return Redirect()->back()->with($notification); 
 }



public function editMessmethod($id){
 $edit=DB::table('user_message')->where('id',$id)->first();
	return view('backend.customer_message.edit_customer_message', compact('edit'));
}



public function message_updatemethod(Request $id,$req){


 $prodata=DB::table('user_message')->where('id',$id)->first();

$email=$id->email;
$message=$id->message;
$replay_meassage=$id->replay_meassage;
$headers = "From:das.shatu2000@gmail.com";

	$data= array(
	 'email'  =>$id->email,
	 'replay_meassage'  =>$id->replay_meassage,
	 'admin_id'         => Auth()->user()->id,
	);



	DB::table('user_message')->where('id',$req)->update($data);

// $data1=['name'=>"shatu",'data'=>'hello'];
// $user=['to']='das.shrabani97@gmail.com';

// $to_name='Shatu';
// $to_email='das.shrabani97@gmail.com';
// $dataa= array('name' =>'link this video','body'=>"tast mail like" );

 mail('mail',$email, $message, $replay_meassage, $headers);
// mail::send('mail',$dataa,function($message) use ($to_name,$to_email);
// {
//  $message->to($to_email)->subjuct('web testing mail');

// });


	// mail::send($email, $message, $replay_meassage, $headers);

	 $notification=array(
	 'messege'   =>'Replay Message Sent',
	 'alert-type'=>'success'
	);

	return Redirect()->back()->with($notification); 
 }











}
