<?php

namespace App\Http\Controllers\backend;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use auth;
use Image;

class categorycontroller extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function categoryinfomethod(){
		return view('backend.category_information.category_info');
	}
	public function categoryinsertmethod(Request $cat){
		$validation      =$cat->validate([
			'sl'            =>'required',
			'item_id'       =>'required',
			'category_name' =>'required',
			'status'        =>'required',
		]);

		$id = IdGenerator::generate(['table' => 'category_information', 'length' => 10, 'prefix' =>'CAT-']);

		$data= array(
			'id'            =>$id,
			'sl'            =>$cat->sl,
			'item_id'       =>$cat->item_id,
			'category_name' =>$cat->category_name,
			'status'        =>$cat->status,
			'admin_id'      =>Auth()->user()->id,
		);
		$newimage        = $cat->file('category_image');
		if ($newimage){
			$image_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/categoryimage/'.$image_name,80);
			$data['category_image']='public/image/categoryimage/'.$image_name;
			DB::table('category_information')->insert($data);
		}
		else
		{
			DB::table('category_information')->insert($data);
		}
		$notification=array(
			'messege'   =>'Category Added Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}

	public function managecategorymethod(){
		$catdata=DB::table('category_information')
		->leftjoin('users','users.id','category_information.admin_id')
		->leftjoin('item_information','item_information.id','category_information.item_id')
		->select('category_information.*','users.name','item_information.item_name')
		->get();
		return view('backend.category_information.manage_category', compact('catdata'));
	}

	public function catactivemethod($id){
		DB::table('Category_information')->where('id',$id)->update(['status'=>1]);
		$notification=array(
			'messege'   =>'Category Active Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}

	public function catinactivemethod($id){
		DB::table('Category_information')->where('id',$id)->update(['status'=>0]);
		$notification=array(
			'messege'   =>'Category Inactive Successfully',
			'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification); 
	}

	public function deletecatmethod($id){
		$datachack=DB::table('Category_information')->where('id',$id)->first();
		if (isset($datachack->category_image)){
			unlink($datachack->category_image);
			DB::table('Category_information')->where('id',$id)->delete();
		}
		else
		{
			DB::table('Category_information')->where('id',$id)->delete();
		}

		$notification=array(
			'messege'   =>'Delete Category Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}


	public function editcatmethod($id){
		$edit = DB::table('Category_information')->where('Category_information.id',$id)
		->leftjoin('item_information','item_information.id','category_information.item_id')
		->select('Category_information.*','item_information.item_name')
		->first();
		return view('backend.category_information.edit_category_info', compact('edit'));
	}

	public function categoryupdatemethod (Request $id, $edit){
		$validation      =$id->validate([
			'sl'            =>'required',
			'item_id'       =>'required',
			'category_name' =>'required',
			'status'        =>'required',
		]);

		$data= array(
			'sl'            =>$id->sl,
			'item_id'       =>$id->item_id,
			'category_name' =>$id->category_name,
			'status'        =>$id->status,
			'admin_id'      =>Auth()->user()->id,
		);

		$oldimage       =$id->old_image;
		$newimage       = $id->file('category_image');
		if (isset($newimage))
		{
			if (isset($oldimage))
			{
				unlink($oldimage);
			}
			$image_one_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/categoryimage/'.$image_one_name,80);
			$data['category_image']='public/image/categoryimage/'.$image_one_name;
			DB::table('Category_information')->where('id',$edit)->update($data);
		}
		else
		{
			DB::table('Category_information')->where('id',$edit)->update($data);
		}
		$notification=array(
			'messege'   =>'Category Updated Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}	


public function allcatmethod(){
		$logo=DB::table('setting_information')->first();

		$allcat=DB::table('category_information')
		->leftjoin('item_information','item_information.id','category_information.item_id')
		->leftjoin('users','users.id','category_information.admin_id')
		->select('category_information.*','item_information.item_name','users.name')->get();

		return view('backend.category_information.all_categoryinfo',compact('allcat','logo'));
	}



	//--------subcategory----------//
	public function  sucategoryinfomethod(){
		$item=DB::table('item_information')->where('status',1)->get();
		return view('backend.category_information.sucategoryinfo',compact('item'));
	}


	public function subcategoryinsertmethod(Request $r){
		$validation          =$r->validate([
			'sl'                 =>'required',
			'item_id'            =>'required',
			'category_id'        =>'required',
			'subcategory_name'   =>'required',
			'status'             =>'required',
		]);


		$id = IdGenerator::generate(['table' => 'subcategory_information', 'length' => 13, 'prefix' =>'SUBCAT-']);

		$data= array(
			'id'                =>$id,
			'sl'                =>$r->sl,
			'item_id'           =>$r->item_id,
			'category_id'       =>$r->category_id,
			'subcategory_name'  =>$r->subcategory_name,
			'status'            =>$r->status,
			'admin_id'          =>Auth()->user()->id,
		);

		$newimage        = $r->file('subcategory_image');
		if ($newimage){
			$image_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/subcategoryimage/'.$image_name,80);
			$data['subcategory_image']='public/image/subcategoryimage/'.$image_name;
			DB::table('subcategory_information')->insert($data);
		}
		else
		{
			DB::table('subcategory_information')->insert($data);
		}
		$notification=array(
			'messege'   =>'Sub Category Added Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}


	public function managesubcategorymethod(){
		$subcat=DB::table('subcategory_information')
		->leftjoin('users','users.id','subcategory_information.admin_id')
		->leftjoin('item_information','item_information.id','subcategory_information.item_id')
		->leftjoin('category_information','category_information.id','subcategory_information.category_id')
		->select('subcategory_information.*','users.name','item_information.item_name','category_information.category_name')
		->get();
		return view('backend.category_information.manage_subcategory', compact('subcat'));
	}


	public function subcatinactivemethod($id){
		DB::table('subcategory_information')->where('id',$id)->update(['status'=>0]);
		$notification=array(
			'messege'   =>'Sub Category Inactive Successfully',
			'alert-type'=>'error'
		);

		return Redirect()->back()->with($notification); 
	}

	public function subcatactivemethod($id){
		DB::table('subcategory_information')->where('id',$id)->update(['status'=>1]);
		$notification=array(
			'messege'   =>'Sub Category Active Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}


	public function deletesubcatmethod($id){
		$datachack=DB::table('subcategory_information')->where('id',$id)->first();
		if (isset($datachack->subcategory_image)){
			unlink($datachack->subcategory_image);
			DB::table('subcategory_information')->where('id',$id)->delete();
		}
		else
		{
			DB::table('subcategory_information')->where('id',$id)->delete();
		}

		$notification=array(
			'messege'   =>'Delete Sub Category Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}

	public function editsubcatmethod($id){
		$item=DB::table('item_information')->where('status',1)->get();
		$category=DB::table('category_information')->where('status',1)->get();
		$edit = DB::table('subcategory_information')->where('subcategory_information.id',$id)
		->leftjoin('users','users.id','subcategory_information.admin_id')
		->leftjoin('item_information','item_information.id','subcategory_information.item_id')
		->leftjoin('category_information','category_information.id','subcategory_information.category_id')
		->select('subcategory_information.*','users.name','item_information.item_name','category_information.category_name')
		->first();
		return view('backend.category_information.edit_subcategory_info', compact('item','category','edit'));
	}


	public function subcategoryupdatemethod (Request $id, $edit){
		$validation          =$id->validate([
			'sl'                 =>'required',
			'item_id'            =>'required',
			'category_id'        =>'required',
			'subcategory_name'   =>'required',
			'status'             =>'required',
		]);

	 $data= array(
		
			'sl'                =>$id->sl,
			'item_id'           =>$id->item_id,
			'category_id'       =>$id->category_id,
			'subcategory_name'  =>$id->subcategory_name,
			'status'            =>$id->status,
			'admin_id'          =>Auth()->user()->id,
		);

		$oldimage       =$id->old_image;
		$newimage       = $id->file('subcategory_image');
		if (isset($newimage))
		{
			if (isset($oldimage))
			{
				unlink($oldimage);
			}
			$image_one_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('public/image/subcategoryimage/'.$image_one_name,80);
			$data['subcategory_image']='public/image/subcategoryimage/'.$image_one_name;
			DB::table('subcategory_information')->where('id',$edit)->update($data);
		}
		else
		{
			DB::table('subcategory_information')->where('id',$edit)->update($data);
		}
		$notification=array(
			'messege'   =>'Sub Category Updated Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}


	public function all_subcategorymethod(){
			$logo=DB::table('setting_information')->first();
			$all_subcat=DB::table('subcategory_information')
				->leftjoin('item_information','item_information.id','subcategory_information.item_id')
				
				->leftjoin('category_information','category_information.id','subcategory_information.category_id')
			->leftjoin('users','users.id','subcategory_information.admin_id')

			->select('subcategory_information.*','item_information.item_name','category_information.category_name','users.name')->get();

		return view('backend.category_information.all_subcategory_info',compact('all_subcat','logo'));
	}




	




}
