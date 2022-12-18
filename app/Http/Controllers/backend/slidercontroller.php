<?php

namespace App\Http\Controllers\backend;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use auth;
use Image;

class slidercontroller extends Controller
{
  public function __construct()
	{
		$this->middleware('auth');
	}

	//-------slider info--------//
	public function slideraddmethod(){
		return view('backend.setting_information.slider_info');
	}

	public function sliderinsertmethod(Request $a){
		$validation=$a->validate([
			'title'   =>'required',
			'url'     =>'required',

		]);

		$id = IdGenerator::generate(['table' => 'slider_information', 'length' => 12, 'prefix' =>'slider-']);


		$data= array(
			'id'            =>$id,
			'title'         =>$a->title,
			'url'           =>$a->url,
			'admin_id'      =>Auth()->user()->id,
		);

		$sliderimage     =$a->file('slider_image');
		if ($sliderimage)
		{
			$image_name= hexdec(uniqid()).'.'.$sliderimage->getClientOriginalExtension();
			Image::make($sliderimage)->save('public/image/sliderimage/'.$image_name,80);
			$data['slider_image']='public/image/sliderimage/'.$image_name;
			DB::table('slider_information')->insert($data);		
		}
		else
		{
			DB::table('slider_information')->insert($data);
		}

		$notification=array(
			'messege'   =>'Slider info Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 

	}

	public function manageslidermethod(){
		$slider_Info=DB::table('slider_information')
		->leftjoin('users','users.id','slider_information.admin_id')
		->select('slider_information.*','users.name')
		->get();
		return view('backend.setting_information.manage_slider' , compact('slider_Info'));
	}


	public function sliderdetemethod($id){

		$chackslider=DB::table('slider_information')->where('id',$id)->first();
		if (isset($chackslider->slider_image))
		{
			unlink($chackslider->slider_image);
			DB::table('slider_information')->where('id',$id)->delete();
		}
		else
		{
			DB::table('slider_information')->where('id',$id)->delete();
		}

		$notification=array(
			'messege'   =>'Delete Slider Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}

	public function slidereditmethod($id){

		$slideredit=DB::table('slider_information')->where('id',$id)
		->first();
		return view('backend.setting_information.editslider_info', compact('slideredit'));	
	}


	public function updateslidermethod(Request $id,$edit){
		$validation      =$id->validate([
			'title'         =>'required',
			'url'           =>'required',
		]);

		$data= array(
			'title'         =>$id->title,
			'url'           =>$id->url,
			'admin_id'      =>Auth()->user()->id,
		);

		$oldimage        =$id->old_image;
		$newslider       =$id->file('slider_image');
		if (isset($newslider))
		{
			if (isset($oldimage))
			{
				unlink($oldimage);
			}
			$image_one_name= hexdec(uniqid()).'.'.$newslider->getClientOriginalExtension();
			Image::make($newslider)->save('public/image/sliderimage/'.$image_one_name,80);
			$data['slider_image']='public/image/sliderimage/'.$image_one_name;
			DB::table('slider_information')->where('id',$edit)->update($data);
		}
		else
		{
			DB::table('slider_information')->where('id',$edit)->update($data);
		}

		$notification=array(
			'messege'   =>'Slider Info Updated Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
}


}
