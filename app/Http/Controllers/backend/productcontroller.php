<?php

namespace App\Http\Controllers\backend;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use auth;
use Image;

class productcontroller extends Controller
{
   public function __construct()
	{
		$this->middleware('auth');
	}

	//-----product info------//
	public function productinfomethod(){

		$item=DB::table('item_information')->where('status',1)->get();
		$brand=DB::table('brand_information')->where('status',1)->get();
		return view('backend.product_information.product_info',compact('item','brand'));
	}

	public function getcategorymethod($item_id){
		$data = DB::table('category_information')->where('item_id',$item_id)->get();
		return json_encode($data);
	}


public function getsubcategorymethod($category_id){
		$dataa = DB::table('subcategory_information')->where('category_id',$category_id)->get();
		return json_encode($dataa);
	}


	public function insertproductmethod(Request $r){
		$validation        =$r->validate([
			'product_code'    =>'required',
			'product_name'    =>'required',
			'item_id'         =>'required',
			'purchase_price'  =>'required',
			'sale_price'      =>'required',
			'stock_status'    =>'required',
			'status'          =>'required',
			'product_image'   =>'required',
			'quantity'        =>'required',
			
		]);

		$id = IdGenerator::generate(['table' => 'product_information', 'length' => 10, 'prefix' =>'Pro-']);
		$data = array(
			'id'              =>$id,
			'product_code'    =>$r->product_code,
			'product_name'    =>$r->product_name,
			'item_id'         =>$r->item_id,
			'category_id'     =>$r->category_id,
			'sub_category_id' =>$r->sub_category_id,			
			'brand_id'        =>$r->brand_id,
			'purchase_price'  =>$r->purchase_price,
			'sale_price'      =>$r->sale_price,
			'Discount_price'  =>$r->Discount_price,
			'stock_status'    =>$r->stock_status,
			'size'            =>$r->size,
			'color'           =>$r->color,
			'short_detalis'   =>$r->short_detalis,
			'full_detalis'    =>$r->full_detalis,
			'admin_id'        =>Auth()->user()->id,
			'status'          =>$r->status,
			'quantity'        =>$r->quantity,
			'measurement'     =>$r->measurement
		);

		$proimage=$r->file('product_image');

		if ($proimage){
			$image_one_name= hexdec(uniqid()).'.'.$proimage->getClientOriginalExtension();
			Image::make($proimage)->save('public/image/projuctimage/'.$image_one_name,80);
			$data['product_image']='public/image/projuctimage/'.$image_one_name;
			DB::table('product_information')->insert($data);
		}
		else
		{
			DB::table('product_information')->insert($data);
		}
		$notification=array(
			'messege'   =>'Product Add Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}


	public function manageproductmethod(){
		$product=DB::table('product_information')
		->leftjoin('item_information','item_information.id','product_information.item_id')
		->select('product_information.*','item_information.item_name')
		->get();
		return view('backend.product_information.manage_product', compact('product'));
	}


	public function allproductmethod(){
		$product=DB::table('product_information')
		->leftjoin('item_information','item_information.id','product_information.item_id')
		->leftjoin('category_information','category_information.id','product_information.category_id')
		->leftjoin('subcategory_information','subcategory_information.id','product_information.sub_category_id')
		->leftjoin('brand_information','brand_information.id','product_information.brand_id')
		->select('product_information.*','item_information.item_name','category_information.category_name','subcategory_information.subcategory_name','brand_information.brand_name')
		->get();
		return view('backend.product_information.all_product', compact('product'));
	}






	public function statusAvailablemethod($id){
		DB::table('product_information')->where('id',$id)->update(['stock_status'=>0]);
		$notification=array(
			'messege'   =>'Stock Status Successfully',
			'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification); 
	}

	public function statusUnavailablemethod($id){
		DB::table('product_information')->where('id',$id)->update(['stock_status'=>1]);
		$notification=array(
			'messege'   =>'Stock Status Successfully Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}
	public function activepromethod($id){
		DB::table('product_information')->where('id',$id)->update(['status'=>0]);
		$notification=array(
			'messege'   =>'Status Successfully',
			'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification); 
	}
	public function inactivepromethod($id){
		DB::table('product_information')->where('id',$id)->update(['status'=>1]);
		$notification=array(
			'messege'   =>'Status Successfully Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}

	
	public function deletepromethod($id){
		$datachack=DB::table('product_information')->where('id',$id)->first();
		if (isset($datachack->product_image)){
			unlink($datachack->product_image);
			DB::table('product_information')->where('id',$id)->delete();
		}
		else
		{
			DB::table('product_information')->where('id',$id)->delete();
		}
		$notification=array(
			'messege'   =>'Delete Product Successfully',
			'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification); 

	}


	public function editpromethod($id){
		$item=DB::table('item_information')->where('status',1)->get();
		$category=DB::table('category_information')->where('status',1)->get();
		$subcategory=DB::table('subcategory_information')->where('status',1)->get();
		$brand=DB::table('brand_information')->where('status',1)->get();
		$data = DB::table('product_information')->where('product_information.id',$id)
		->leftjoin('item_information','item_information.id','product_information.item_id')
		->leftjoin('category_information','category_information.id','product_information.category_id')
		->leftjoin('subcategory_information','subcategory_information.id','product_information.sub_category_id')
		->leftjoin('brand_information','brand_information.id','product_information.brand_id')
		
		->select('product_information.*','item_information.item_name','category_information.category_name','subcategory_information.subcategory_name','brand_information.brand_name')
		->first();
		return view('backend.product_information.edit_product', compact('item','category','subcategory','brand','data'));
	}


	public function updataproductmethod(Request $id,$edit){

		$validation        =$id->validate([
			'product_code'    =>'required',
			'product_name'    =>'required',
			'item_id'         =>'required',
			'purchase_price'  =>'required',
			'sale_price'      =>'required',
			'stock_status'    =>'required',
			'status'          =>'required',
			'quantity'        =>'required',
		
		]);


		$data = array(
			'product_code'    =>$id->product_code,
			'product_name'    =>$id->product_name,
			'item_id'         =>$id->item_id,
			'category_id'     =>$id->category_id,
			'sub_category_id' =>$id->sub_category_id,
			'brand_id'        =>$id->brand_id,
			'purchase_price'  =>$id->purchase_price,
			'sale_price'      =>$id->sale_price,
			'Discount_price'  =>$id->Discount_price,
			'stock_status'    =>$id->stock_status,
			'size'            =>$id->size,
			'color'           =>$id->color,
			'short_detalis'   =>$id->short_detalis,
			'full_detalis'    =>$id->full_detalis,
			'admin_id'        =>Auth()->user()->id,
			'status'          =>$id->status,
			'quantity'        =>$id->quantity,
			'measurement'     =>$id->measurement,
			
		);

		$oldimage       = $id->old_image;
		$newimage       = $id->file('product_image');
		if (isset($newimage))
		{
			if (isset($oldimage))
			{
				unlink($oldimage);
			}
			$image_one_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/projuctimage/'.$image_one_name,80);
			$data['product_image']='public/image/projuctimage/'.$image_one_name;
			DB::table('product_information')->where('id',$edit)->update($data);
		}
		else
		{
			DB::table('product_information')->where('id',$edit)->update($data);
		}
		$notification=array(
			'messege'=>'Product Updated Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}


}
