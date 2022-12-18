<?php

namespace App\Http\Controllers\backend;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
use DB;
use auth;
use Image;
Use Hash;

class backcontroller extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


//---------about info---------//
	public function aboutmethod(){
		$about=DB::table('about')->first();
		return view('backend.setting_information.about',compact('about'));
	}

	public function updateaboutmethod(Request $id,$edit){
		$data= array(
			'details'   =>$id->details,
			'admin_id'  =>Auth()->user()->id,
		);

		DB::table('about')->where('id',$edit)->update($data);
		$notification=array(
			'messege'   =>'Adout Us Update Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);

	}


//-------contuct info--------//
	public function contuctmethod(){
		$contuct=DB::table('contuct')->first();
		return view('backend.setting_information.contuct',compact('contuct'));
	}

	public function updatecontuctmethod(Request $id,$edit){
		$data= array(
			'phone'   =>$id->phone,
			'email'   =>$id->email,
			'location'   =>$id->location,
			'details'   =>$id->details,
			'admin_id'  =>Auth()->user()->id,
		);

		DB::table('contuct')->where('id',$edit)->update($data);
		$notification=array(
			'messege'   =>'Contuct Us Update Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);

	}

//-------termcondition--------//
	public function termconditionmethod(){
		$tram=DB::table('term_condition')->first();
		return view('backend.setting_information.term_condition',compact('tram'));
	}

	public function updatetrammethod(Request $id, $edit){
		$data= array(
			'details'   =>$id->details,
			'admin_id'  =>Auth()->user()->id,
		);

		DB::table('term_condition')->where('id',$edit)->update($data);
		$notification=array(
			'messege'   =>'Tram @ Condition Update Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}


//------privacy--------//
	public function privacypolicemethod(){
		$privacy=DB::table('privace_policy')->first();
		return view('backend.setting_information.privacy_police',compact('privacy'));
	}

	public function updatepolicymethod(Request $id,$edit)
	{
		$data= array(
			'details'   =>$id->details,
			'admin_id'  =>Auth()->user()->id,
		);

		DB::table('privace_policy')->where('id',$edit)->update($data);
		$notification=array(
			'messege'   =>'privace policy Update Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}


//-------how to bay info------//
	public function howtobaymethod(){
		$howTobay=DB::table('how_to_bay')->first();
		return view('backend.setting_information.how_to_bay',compact('howTobay'));
	}

	public function updatehowmethod(Request $id,$edit){
		$data= array(
			'details'   =>$id->details,
			'admin_id'  =>Auth()->user()->id,
		);

		DB::table('how_to_bay')->where('id',$edit)->update($data);
		$notification=array(
			'messege'   =>'How To Bay Update Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}

//-------faq--------//
	public function faqmethod(){
		return view('backend.setting_information.faq');
	}
	public function insertfaqmethod(Request $a){
		$validation=$a->validate([
			'question'          =>'required',
			'detalis'           =>'required',
		]);

		$id = IdGenerator::generate(['table' => 'faq', 'length' => 10, 'prefix' =>'FAQ-']);
		$data= array(
			'id'         =>$id,
			'question'   =>$a->question,
			'detalis'    =>$a->detalis,
			'admin_id'   =>Auth()->user()->id,
		);

		DB::table('faq')->insert($data);
		$notification=array(
			'messege'   =>'FAQ Added Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}

	public function managefaqmethod(){
		$FAQ_data=DB::table('faq')
		->leftjoin('users','users.id','faq.admin_id')
		->select('faq.*','users.name')
		->get();
		return view('backend.setting_information.manage_faq', compact('FAQ_data'));
	}

	public function deleteFAQmethod($id){
		DB::table('faq')->where('id',$id)->delete();

		$notification=array(
			'messege'   =>'FAQ Delete Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}

	public function editFAQmethod($id){
		$edit = DB::table('faq')->where('faq.id',$id)
		->leftjoin('users','users.id','faq.admin_id')
		->select('faq.*','users.name')
		->first();
		return view('backend.setting_information.editFAQ', compact('edit'));
	}
	

	public function updateFAQmethod(Request $id, $edit){
		$validation=$id->validate([
			'question'        =>'required',
			'detalis'         =>'required',
		]);

		$data= array(
			'question'        =>$id->question,
			'detalis'         =>$id->detalis,
			'admin_id'        =>Auth()->user()->id,
		);
		DB::table('faq')->where('id',$edit)->update($data);
		$notification=array(
			'messege'   =>'FAQ Update Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}




//-------user back part-------//
public  function User_Infomethod(){
 $user_admin=DB::table('users')->where('user_condition',0)->get();
	return view('backend.customer_info.customer_account_info',compact('user_admin'));

}

//--------user account delete-----//
public function user_acc_delmethod($id)
{
	$userdelete=DB::table('users')->where('id',$id)->first();
	if(isset($userdelete->image))
	{
		unlink($userdelete->image);
		DB::table('users')->where('id',$id)->delete();
	}
	else
	{
		DB::table('users')->where('id',$id)->delete();
	}
	$notification=array(
		'messege'   =>'Delete Item Successfully',
		'alert-type'=>'success'
	);
	return Redirect()->back()->with($notification); 
}

//------user edit---------//
	public  function user_acc_editmethod($id){
		$edit=DB::table('users')->where('id',$id)->first();
		return view('backend.customer_info.edit_customer_account', compact('edit'));

	}


//--------user data update---------//
	public function Customer_updatemethod(Request $id,$req){
		if($id->password==null)
		{
			$user_type='0';
			$data = array(
				'name'      =>$id->name,
				'phone'     =>$id->phone,
				'address'   =>$id->address,
				'user_condition'  => $user_type,
			);
		}
		else
		{
			$user_type='0';
			$data = array(
				'name'      =>$id->name,
				'phone'     =>$id->phone,
				'address'   =>$id->address,
				'password'  => Hash::make($id->password),
				'user_condition'  => $user_type,
			);
		}

		$old_image   =$id->old_image;
		$new_image   =$id->file('image');

		if(isset($new_image))
		{
			if(isset($old_image))
			{
				unlink($old_image);
			}

			$image_one_name= hexdec(uniqid()).'.'.$new_image->getClientOriginalExtension();
			Image::make($new_image)->save('public/image/adminimage/'.$image_one_name,80);
			$data['image']='public/image/adminimage/'.$image_one_name;
			DB::table('users')->where('id',$req)->update($data);
		}
		else{
			DB::table('users')->where('id',$req)->update($data);
		}

		$notification=array(
			'messege'   =>'Admin Updated Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}

}
