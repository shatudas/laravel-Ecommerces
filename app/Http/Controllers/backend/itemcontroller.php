<?php

namespace App\Http\Controllers\backend;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use auth;
use Image;

class itemcontroller extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	//-------item info--------//
	public function iteminfomethod(){
		return view('backend.item_information.item_info');
	}
	public function iteminsertmethod(Request $a)
	{
		
		$validation=$a->validate([
			'sl'         =>'required',
			'item_name'  =>'required',
			'status'     =>'required',
		]);

		$id = IdGenerator::generate(['table' => 'item_information', 'length' => 10, 'prefix' =>'ITEM-']);

		$data= array(
			'id'         =>$id,
			'sl'         =>$a->sl,
			'item_name'  =>$a->item_name,
			'status'     =>$a->status,
			'admin_id'   =>Auth()->user()->id,
		);
		$newimage     = $a->file('item_image');
		if ($newimage)
		{
			$image_name  = hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/itemimage/'.$image_name,80);
			$data['item_image']='public/image/itemimage/'.$image_name;
			DB::table('item_information')->insert($data);
		}
		else
		{
			DB::table('item_information')->insert($data);
		}

		$notification=array(
			'messege'    =>'Item Added Successfully',
			'alert-type' =>'success'
		);
		return Redirect()->back()->with($notification);
	}

	public function manageitemmethod(){
		$itemdata=DB::table('item_information')
		->leftjoin('users','users.id','item_information.admin_id')
		->select('item_information.*','users.name')
		->get();
		return view('backend.item_information.manage_item', compact('itemdata'));
	}

	public function itemactivemethod($id){
		DB::table('item_information')->where('id',$id)->update(['status'=>1]);
		$notification=array(
			'messege'   =>'Item Active Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}

	public function iteminactivemethod($id){
		DB::table('item_information')->where('id',$id)->update(['status'=>0]);
		$notification=array(
			'messege'   =>'Item Inactive Successfully',
			'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification); 
	}


	public function deleteitemmethod($del){
		$datachack=DB::table('item_information')->where('id',$del)->first();
		if (isset($datachack->item_image)){
			unlink($datachack->item_image);
			DB::table('item_information')->where('id',$del)->delete();
		}
		else
		{
			DB::table('item_information')->where('id',$del)->delete();
		}

		$notification=array(
			'messege'   =>'Delete Item Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}



	public  function edititemmethod($edit){
		$edit=DB::table('item_information')->where('id',$edit)->first();
		return view('backend.item_information.edit_item_info', compact('edit'));

	}

	public function itemupdatemethod(Request $e, $edit){
		$data = array(
			'sl'        => $e->sl,
			'item_name' => $e->item_name,
			'status'    => $e->status,
			'admin_id'  => Auth()->user()->id,
		);
		

		$oldimage    =$e->old_image;
		$newimage    = $e->file('item_image');
		if (isset($newimage))
		{
			if (isset($oldimage))
			{
				unlink($oldimage);
			}

			$image_one_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/itemimage/'.$image_one_name,80);
			$data['item_image']='public/image/itemimage/'.$image_one_name;
			DB::table('item_information')->where('id',$edit)->update($data);
		}

		else
		{
			DB::table('item_information')->where('id',$edit)->update($data);
		}
		$notification=array(
			'messege'   =>'Item Updated Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}


	public function allitemmethod(){
		$allitem_info=DB::table('item_information')
		->leftjoin('users','users.id','item_information.admin_id')
		->select('item_information.*','users.name')
		->get();

		$logo=DB::table('setting_information')->first();
		
	 return view('backend.item_information.all_item_info',compact('allitem_info','logo'));
	}






}
