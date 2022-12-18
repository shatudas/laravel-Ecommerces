<?php

namespace App\Http\Controllers\backend;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use auth;
use Image;

class brandcontroller extends Controller
{
  public function __construct()
	{
		$this->middleware('auth');
	}

	//---------brand-------//
	public function brandinfomethod(){
		return view('backend.brand_information.brand_info');
	}

	public function insertbrandmethod(Request $a){


		$validation     =$a->validate([
			'sl'           =>'required',
			'brand_name'   =>'required',
			'status'       =>'required',
		]);

		$id = IdGenerator::generate(['table' => 'brand_information', 'length' => 10, 'prefix' =>'brand-']);

		$data= array(
			'id'         =>$id,
			'sl'          =>$a->sl,
			'brand_name'  =>$a->brand_name,
			'status'      =>$a->status,
			'admin_id'    =>Auth()->user()->id,
		);

		$newimage      = $a->file('brand_image');
		if ($newimage)
		{
			$image_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/brandimage/'.$image_name,80);
			$data['brand_image']='public/image/brandimage/'.$image_name;
			DB::table('brand_information')->insert($data);
		}
		else
		{
			DB::table('brand_information')->insert($data);
		}

		$notification=array(
			'messege'   =>'Brand Added Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}

	public function managebrandmethod(){
		$brand_data=DB::table('brand_information')
		->leftjoin('users','users.id','brand_information.admin_id')
		->select('brand_information.*','users.name')
		->get();
		return view('backend.brand_information.manage_brand', compact('brand_data'));
	}

	public function brandinactivemethod($id){
		DB::table('brand_information')->where('id',$id)->update(['status'=>1]);
		$notification=array(
			'messege'   =>'brand Active Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}

	public function brandactivemethod($id){
		DB::table('brand_information')->where('id',$id)->update(['status'=>0]);
		$notification=array(
			'messege'   =>'Brand Inactive Successfully',
			'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification); 
	}

	public function deletebrandmethod($id){
		$datachack=DB::table('brand_information')->where('id',$id)->first();
		if (isset($datachack->brand_image)){
			unlink($datachack->brand_image);
			DB::table('brand_information')->where('id',$id)->delete();
		}
		else
		{
			DB::table('brand_information')->where('id',$id)->delete();
		}

		$notification=array(
			'messege'   =>'Delete Brand Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}

	public function editbrandmethod($id){
		$edit = DB::table('brand_information')->where('brand_information.id',$id)
		->leftjoin('users','users.id','brand_information.admin_id')
		->select('brand_information.*','users.name')
		->first();
		return view('backend.brand_information.editbrand_info', compact('edit'));
	}

	public function updatebrandmethod(Request $id, $edit){
		$validation     =$id->validate([
			'sl'           =>'required',
			'brand_name'   =>'required',
			'status'       =>'required',
		]);

		$data= array(
			'sl'          =>$id->sl,
			'brand_name'  =>$id->brand_name,
			'status'      =>$id->status,
			'admin_id'    =>Auth()->user()->id,
		);

		$oldimage      =$id->old_image;
		$newimage      = $id->file('brand_image');
		if (isset($newimage))
		{
			if (isset($oldimage))
			{
				unlink($oldimage);
			}
			$image_one_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/brandimage/'.$image_one_name,80);
			$data['brand_image']='public/image/brandimage/'.$image_one_name;
			DB::table('brand_information')->where('id',$edit)->update($data);
		}
		else
		{
			DB::table('brand_information')->where('id',$edit)->update($data);
		}
		$notification=array(
			'messege'   =>'Brand Updated Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}


	public function all_brandmethod(){
		$allbrand=DB::table('brand_information')
		->leftjoin('users','users.id','brand_information.admin_id')
		->select('brand_information.*','users.name')
		->get();
		$logo=DB::table('setting_information')->first();
		return view('backend.brand_information.all_brand_info',compact('allbrand','logo'));
	}



}
