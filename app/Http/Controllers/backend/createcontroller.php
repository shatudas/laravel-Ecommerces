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

class createcontroller extends Controller
{
		public function __construct()
	{
		$this->middleware('auth');
	}

 public function insertadminmethod(Request $r){
	$is_admin = '1';
	$user_type='1';

		$data = array(
			'name'            =>$r->name,
			'email'           =>$r->email,
			'phone'           =>$r->phone,
			'address'         =>$r->address,
			'password'        => Hash::make($r['password']),
			'admin_id'        =>Auth()->user()->id, 
			'is_admin'  	  => $is_admin,
			'status'          =>$r->status,
			'user_condition'  => $user_type,
		);

  	$newimage   = $r->file('image');
		if ($newimage){
			$image_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/adminimage/'.$image_name,80);
			$data['image']='public/image/adminimage/'.$image_name;
			DB::table('users')->insert($data);
		}
		else
		{
			DB::table('users')->insert($data);
		}
		$notification=array(
			'messege'   =>'Admin Added Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);

}

	public function createadminmethod(){
		return view('backend.create_information.create_admin');
	}

	public function manageadminmethod(){
		$admin=DB::table('users')->where('user_condition',1)->get();
		return view('backend.create_information.manage_admin',compact('admin'));
	}


	public function activeadminmethod($id){
		DB::table('users')->where('id',$id)->update(['status'=>0]);
		$notification=array(
			'messege'   =>'Status Inactive Successfully',
			'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification); 
	}
	public function inactiveadminmethod($id){
		DB::table('users')->where('id',$id)->update(['status'=>1]);
		$notification=array(
			'messege'   =>'Status Active Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}


	public function deleteadminmethod($id){
		$datachack=DB::table('users')->where('id',$id)->first();
		if (isset($datachack->image)){
			unlink($datachack->image);
			DB::table('users')->where('id',$id)->delete();
		}
		else
		{
			DB::table('users')->where('id',$id)->delete();
		}
		$notification=array(
			'messege'   =>'Delete Admin Successfully',
			'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification); 

	}

	public  function editadminmethod($id){
		$edit=DB::table('users')->where('id',$id)->first();
		return view('backend.create_information.edit_create_admin', compact('edit'));
	}


	public function updateadminmethod(Request $id, $edit){

		if ($id->password==Null)
		{
			$is_admin = '1';
			$user_type='1';
			$data = array(
			'name'      =>$id->name,
			// 'email'     =>$id->email,
			'phone'     =>$id->phone,
			'address'   =>$id->address,
			'status'    =>$id->status,
			'admin_id'  =>Auth()->user()->id, 
			'is_admin'  => $is_admin,
			'user_condition'  => $user_type,
			);
		}
		else
		{
  $is_admin = '1';
  $user_type='1';
			$data = array(
			'name'      =>$id->name,
			// 'email'     =>$id->email,
			'phone'     =>$id->phone,
			'address'   =>$id->address,
			'status'    =>$id->status,
			'password'  => Hash::make($id->password),
			'admin_id'  =>Auth()->user()->id, 
			'is_admin'  => $is_admin,
			'user_condition'  => $user_type,
			);
		}

		$oldimage    =$id->old_image;
		$newimage    = $id->file('image');
		if (isset($newimage))
		{
			if (isset($oldimage))
			{
				unlink($oldimage);
			}
			$image_one_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/adminimage/'.$image_one_name,80);
			$data['image']='public/image/adminimage/'.$image_one_name;
			DB::table('users')->where('id',$edit)->update($data);
		}
		else
		{
			DB::table('users')->where('id',$edit)->update($data);
		}
		$notification=array(
			'messege'   =>'Admin Updated Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}

}
