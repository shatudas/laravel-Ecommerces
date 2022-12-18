<?php

namespace App\Http\Controllers\fontnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cart;
Use Hash;


class fontcontroller extends Controller
{
	//=======home controller=======//
	public function homemethod(){

	 //------------show  category--------//
		$showbycategory=DB::table('item_information')->where('status',1)->get();

		//------brand  info show-------//
		$brandinfo=DB::table('brand_information')->orderBy('id','DESC')->where('status',1)->get();

  //--------------slider show--------//
		$slideractive=DB::table('slider_information')->orderBy('id','DESC')->first();
		$slidermore=DB::table('slider_information')->orderBy('id','DESC')->skip(1)->limit(4)->get();
		
		//-----product div item name show------//
		$itemname=DB::table('item_information')->inRandomOrder()->get();
		return view('fontend.home',compact('showbycategory','brandinfo','slideractive','slidermore','itemname'));
	}

//=============FAQ controller=======//
	public function FAQ_pagemethod(){
		$FAQdata=DB::table('faq')->get();
		return view('fontend.faq_page',compact('FAQdata'));
	}

//=======brand all controller===========/
	public function bradmethod($id)
	{
		$brand=DB::table('brand_information')->where('status',1)->get();
		$brandPro=DB::table('product_information')->where('brand_id',$id)->where('status',1)->orderBy('id','DESC')->paginate(8);
		$nameshow=DB::table('brand_information')->where('id',$id)->where('status',1)->first();
		return view('fontend.brand_to_product',compact('brandPro','brand','nameshow'));
	}


//==========item to product controller========//
	public function itemPormethod($id){

		$itemName=DB::table('item_information')->where('id',$id)->where('status',1)->first();
		$catName=DB::table('category_information')->where('item_id',$id)->where('status',1)->get();
		$itempro=DB::table('product_information')->where('item_id',$id)->where('status',1)->orderBy('id','DESC')->paginate(8);
		return view('fontend.item_To_pro',compact('itemName','catName','itempro'));
	}


//=========category to product controller========//
	public function catPormethod($id){
		$SubcatName=DB::table('subcategory_information')->where('category_id',$id)->where('status',1)->get();
		$product_data=DB::table('product_information')->where('category_id',$id)->where('status',1)->orderBy('id','DESC')->paginate(8);

		$catname=DB::table('category_information')
		->where('category_information.id',$id)
		->leftjoin('item_information','item_information.id','category_information.item_id')
		->select('category_information.*','item_information.item_name')
		->first();
		return view('fontend.cat_To_pro',compact('product_data','SubcatName','catname'));
	}

//=========sub category to product controller========//
	public function SubcatPromethod($id){
		$subcatpro=DB::table('product_information')->where('sub_category_id',$id)->where('status',1)->orderBy('id','DESC')->paginate(8);

		$catname=DB::table('subcategory_information')
		->where('subcategory_information.id',$id)
		->leftjoin('item_information','item_information.id','subcategory_information.item_id')
		->leftjoin('category_information','category_information.id','subcategory_information.category_id')
		->select('subcategory_information.*','item_information.item_name','category_information.category_name')

		->first();
		return view('fontend.subcat_to_pro',compact('subcatpro','catname'));
	}

//========single Product view controller========//
	public function viewpromethod($id){

		$setting=DB::table('setting_information')->first();

		$viewpro=DB::table('product_information')->where('product_information.id',$id)
		->leftjoin('item_information','item_information.id','product_information.item_id')
		->leftjoin('category_information','category_information.id','product_information.category_id')
		->leftjoin('brand_information','brand_information.id','product_information.brand_id')
		->select('product_information.*','item_information.item_name','category_information.category_name','brand_information.brand_name')
		->first();

		$relatedproduct=DB::table('product_information')->where('item_id',$viewpro->item_id)->orderBy('id','DESC')->get();
		$productsize=explode(',', $viewpro->size);
		$productcolor=explode(',', $viewpro->color);

		return view('fontend.view_product',compact('viewpro','setting','relatedproduct','productsize','productcolor'));
	}

//============search===========//
	public function searchmethod(Request $request){
		$data=$request->Prosearch;
		$product_cat = DB::table('product_information')->where('product_name', 'like', '%' . $data . '%')
		->where('status', 1)
		->get();
		return view('fontend.searchdata',compact('product_cat'));
	}

//===========cart=======//
	public function addtocardmethod(Request $r,$id){
		$prodata=DB::table('product_information')->where('id',$id)->first();

		$or_price=$prodata->sale_price;
		$dis_price=$prodata->Discount_price;
		$pre_price=$or_price-$dis_price;
		$data = array();
		$data['id']=$prodata->id;
		$data['name']=$prodata->product_name;
		$data['qty']=$r->Quantity;
		$data['weight']=0;
		$data['price']=$pre_price;
		$data['options']['size'] =$r->size;
		$data['options']['color'] =$r->color;
		$data['options']['sale_price'] =$or_price;
		$data['options']['product_image'] =$prodata->product_image;

		Cart::add($data);

		$notification=array(
			'messege'    =>'Add To Cart  Successfully',
			'alert-type' =>'success'
		);
		return redirect()->back()->with($notification);
	}


//----- cart data print-------// 
	public function chack_cartmethod(){
		$card=Cart::content();
		dd($card);
	}


//----cart product remove--------//
	public function removemethod($rowId){
		Cart::remove($rowId);

		$notification=array(
			'messege'    =>'Product Remove  To Card',
			'alert-type' =>'success'
		);
		return redirect()->back()->with($notification);
	}

//-------cart product all clear-------//
	public function clermethod(){
		Cart::destroy();
		return redirect()->back();
	}

//--------cart page qty update--------//
	public function pro_updatemethod(Request $request,$rowId){
		$vardata=$request->qty;
		Cart::update($rowId,$vardata);
		return redirect()->back();
	}

//---------cart data submit--------//
	public function shiping_datamethod(Request $req,$id){

		$contunt=Cart::content();
		if (count($contunt)>0)
		{
			$Data = array(
				'name'           =>$req->name,
				'phone'          =>$req->phone,
				'email'          =>$req->email,
				'address'        =>$req->address,
				'district'       =>$req->district,
				'thana'          =>$req->thana,
				'prement_method' =>$req->prement_method,
				'use_id'         =>$id,
				'status'         =>0,
				'order_date'     =>date('d-m-y'),
			);

			$shiping=DB::table('invoece')->insertGetId($Data);

			$o_data=array();
			foreach ($contunt as $prodata){
				$o_data['invoice_id']=$shiping;
				$o_data['product_id']=$prodata->id;
				$o_data['qty']=$prodata->qty;
				$o_data['color']=$prodata->options->color;
				$o_data['size']=$prodata->options->size;
				$o_data['price']=$prodata->price;
				$o_data['total_price']=$prodata->subtotal;
				DB::table('oder_detalis')->insert($o_data);
			} 
		}

		else
		{
			$notification=array(
				'messege'    =>'Product not  Successfully',
				'alert-type' =>'success'
			);
			return redirect()->back()->with($notification);
		}

		Cart::destroy();
		$notification=array(
			'messege'    =>' Cart  Successfully',
			'alert-type' =>'success'
		);
		return redirect()->back()->with($notification);
	}


//-------cart register  -------//
	public function registermethod(Request $r){
		$is_admin = '0';
		$user_type='0';
		$data = array(
			'name' =>$r->name,
			'email' =>$r->email,
			'phone' =>$r->phone,
			'password' =>Hash::make($r['password']),
			'address' =>$r->address,
			'is_admin'  => $is_admin,
			'user_condition'  => $user_type,
		);

		DB::table('users')->insert($data);
		$notification=array(
			'messege'   =>'Register  Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}




//--------chackout page--------//
	public function chack_outmethod(){
		return view('fontend.chack_out');
	}


	public function about_us_method(){
		$aboutus=DB::table('about')->first();
		return  view('fontend.about_us',compact('aboutus'));
	}

	public function term_conditionmethod(){
		$term_condition=DB::table('term_condition')->first();
		return view('fontend.term_condition',compact('term_condition'));
	}


	public function Privacy_Policymethod (){
		$privacy=DB::table('privace_policy')->first();
		return view('fontend.privacy_policy',compact('privacy'));
	}

	public function how_tomethod(){
		$how_to_data=DB::table('how_to_bay')->first();
		return view ('fontend.how_to_bay', compact('how_to_data'));
	}


	public function blogmethod(){
		return view('fontend.blog');
	}

	public function blogsinglemethod(){
		return view('fontend.blog_single');
	}


	public function shopmethod(){
		return view('fontend.shop');
	}

	public function productmethod(){
		return view('fontend.product');
	}

	public function regularmethod(){
		return view('fontend.regular');
	}


	public function cartmethod(){
		return view('fontend.cart');
	}


	public function contactmethod(){
		$contenttable=DB::table('contuct')->first();
		return view('fontend.contact',compact('contenttable'));
	}

}
