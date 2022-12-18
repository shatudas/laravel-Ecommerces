<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
			 ////------fontend page---------////
//--------home page info-------------//
Route::get('/','fontnd\fontcontroller@homemethod');
Route::get('blog','fontnd\fontcontroller@blogmethod');
Route::get('blog_single','fontnd\fontcontroller@blogsinglemethod');
Route::get('shop','fontnd\fontcontroller@shopmethod');
Route::get('product','fontnd\fontcontroller@productmethod');
Route::get('regular','fontnd\fontcontroller@regularmethod');
Route::get('cart','fontnd\fontcontroller@cartmethod');
Route::get('contact','fontnd\fontcontroller@contactmethod');
Route::get('FAQ_page','fontnd\fontcontroller@FAQ_pagemethod');

Route::get('itemProduct/{id}','fontnd\fontcontroller@itemPormethod');
Route::get('catProduct/{id}','fontnd\fontcontroller@catPormethod');
Route::get('SubcatProduct/{id}','fontnd\fontcontroller@SubcatPromethod');
Route::get('search','fontnd\fontcontroller@searchmethod');

Route::get('product_view/{id}','fontnd\fontcontroller@viewpromethod');
Route::get('brand/{id}','fontnd\fontcontroller@bradmethod');


Route::post('sent_massage','fontnd\userMessage@sent_massagmethod');
Route::get('Message','fontnd\userMessage@Messagemethod');
Route::get('delMess/{id}','fontnd\userMessage@delMessmethod');
Route::get('editMess/{id}','fontnd\userMessage@editMessmethod');
Route::post('message_update/{id}','fontnd\userMessage@message_updatemethod');


//------add to cart-----//
Route::post('addtocart/{id}','fontnd\fontcontroller@addtocardmethod');
Route::get('chack_cart','fontnd\fontcontroller@chack_cartmethod');
Route::get('remove/{rowId}','fontnd\fontcontroller@removemethod');
Route::get('cler','fontnd\fontcontroller@clermethod');
Route::get('chack_out','fontnd\fontcontroller@chack_outmethod');
Route::post('register','fontnd\fontcontroller@registermethod');
Route::post('pro_update/{rowId}','fontnd\fontcontroller@pro_updatemethod');
Route::post('shiping_data/{id}','fontnd\fontcontroller@shiping_datamethod');

//--------user deshboard-------//
Route::get('userdashboard','fontnd\deshboard@userdashboardmethod');
Route::get('all_order','fontnd\deshboard@all_ordermethod');
Route::get('updateinformation','fontnd\deshboard@updateinformationmethod');
Route::get('changepassword','fontnd\deshboard@changepasswordnmethod');
Route::get('invoice/{id}','fontnd\deshboard@invoicemethod');
Route::post('userPassChange','fontnd\deshboard@userPassChangemethod');
Route::post('userDataUpdate/{id}','fontnd\deshboard@userDataUpdatemethod');
Route::post('profileUp/{id}','fontnd\deshboard@profileUpmethod');

//--------home basic page------/
Route::get('about_us','fontnd\fontcontroller@about_us_method');
Route::get('Term_condition','fontnd\fontcontroller@term_conditionmethod');
Route::get('Privacy_Policy','fontnd\fontcontroller@Privacy_Policymethod');
Route::get('how_to','fontnd\fontcontroller@how_tomethod');



		   ////----------backend page------------////

//---------create admin info----------//
Route::get('create_admin','backend\createcontroller@createadminmethod');
Route::get('manage_admin','backend\createcontroller@manageadminmethod');
Route::post('insert_admin','backend\createcontroller@insertadminmethod');
Route::get('activeadmin/{id}','backend\createcontroller@activeadminmethod');
Route::get('inactiveadmin/{id}','backend\createcontroller@inactiveadminmethod');
Route::get('deleteadmin/{id}','backend\createcontroller@deleteadminmethod');
Route::get('editadmin/{id}','backend\createcontroller@editadminmethod');
Route::post('update_admin/{id}','backend\createcontroller@updateadminmethod');


//------------item info----------------//
Route::get('item_info','backend\itemcontroller@iteminfomethod');
Route::get('manage_item','backend\itemcontroller@manageitemmethod');
Route::post('item_insert','backend\itemcontroller@iteminsertmethod');
Route::get('itemactive/{id}','backend\itemcontroller@itemactivemethod');
Route::get('iteminactive/{id}','backend\itemcontroller@iteminactivemethod');
Route::get('deleteitem/{id}','backend\itemcontroller@deleteitemmethod');
Route::get('edititem/{id}','backend\itemcontroller@edititemmethod');
Route::post('item_update/{id}','backend\itemcontroller@itemupdatemethod');
Route::get('all_item','backend\itemcontroller@allitemmethod');

//--------category info--------//
Route::get('category_info','backend\categorycontroller@categoryinfomethod');
Route::get('manage_category','backend\categorycontroller@managecategorymethod');
Route::post('category_insert','backend\categorycontroller@categoryinsertmethod');
Route::get('catactive/{id}','backend\categorycontroller@catactivemethod');
Route::get('catinactive/{id}','backend\categorycontroller@catinactivemethod');
Route::get('deletecat/{id}','backend\categorycontroller@deletecatmethod');
Route::get('editcat/{id}','backend\categorycontroller@editcatmethod');
Route::post('category_update/{id}','backend\categorycontroller@categoryupdatemethod');
Route::get('all_category','backend\categorycontroller@allcatmethod');


//--------subcategory info--------//
Route::get('subcategory_info','backend\categorycontroller@sucategoryinfomethod');
Route::post('subcategory_insert','backend\categorycontroller@subcategoryinsertmethod');
Route::get('manage_subcategory','backend\categorycontroller@managesubcategorymethod');
Route::get('subcatinactive/{id}','backend\categorycontroller@subcatinactivemethod');
Route::get('subcatactive/{id}','backend\categorycontroller@subcatactivemethod');
Route::get('deletesubcat/{id}','backend\categorycontroller@deletesubcatmethod');
Route::get('editsubcat/{id}','backend\categorycontroller@editsubcatmethod');
Route::post('subcategory_update/{id}','backend\categorycontroller@subcategoryupdatemethod');
Route::get('getsubcategory/{category_id}','backend\productcontroller@getsubcategorymethod');
Route::get('all_subcategory','backend\categorycontroller@all_subcategorymethod');


//--------brand info--------//
Route::get('brand_info','backend\brandcontroller@brandinfomethod');
Route::get('manage_brand','backend\brandcontroller@managebrandmethod');
Route::post('insert_brand','backend\brandcontroller@insertbrandmethod');
Route::get('brandinactive/{id}','backend\brandcontroller@brandactivemethod');
Route::get('brandactive/{id}','backend\brandcontroller@brandinactivemethod');
Route::get('delete_brand/{id}','backend\brandcontroller@deletebrandmethod');
Route::get('edit_brand/{id}','backend\brandcontroller@editbrandmethod');
Route::post('update_brand/{id}','backend\brandcontroller@updatebrandmethod');
Route::get('all_brand','backend\brandcontroller@all_brandmethod');


//----product info --------//
Route::get('product_info','backend\productcontroller@productinfomethod');
Route::get('manage_product','backend\productcontroller@manageproductmethod');
Route::get('getcategory/{item_id}','backend\productcontroller@getcategorymethod');
Route::post('insert_product','backend\productcontroller@insertproductmethod');
Route::get('status_Available/{id}','backend\productcontroller@statusAvailablemethod');
Route::get('status_Unavailable/{id}','backend\productcontroller@statusUnavailablemethod');
Route::get('active/{id}','backend\productcontroller@activepromethod');
Route::get('inactive/{id}','backend\productcontroller@inactivepromethod');
Route::get('deletepro/{id}','backend\productcontroller@deletepromethod');
Route::get('editpro/{id}','backend\productcontroller@editpromethod');
Route::post('updata_product/{id}','backend\productcontroller@updataproductmethod');
Route::get('all_product','backend\productcontroller@allproductmethod');




//--------slider info ------//
Route::get('slider_add','backend\slidercontroller@slideraddmethod');
Route::post('Insert_slider','backend\slidercontroller@sliderinsertmethod');
Route::get('manage_slider','backend\slidercontroller@manageslidermethod');
Route::get('slider_delete/{id}','backend\slidercontroller@sliderdetemethod');
Route::get('slider_edit/{id}','backend\slidercontroller@slidereditmethod');
Route::post('Update_slider/{id}','backend\slidercontroller@updateslidermethod');

//-------setting info------//
Route::get('setting','backend\settingcontroller@settingmethod');
Route::post('update_setting/{id}','backend\settingcontroller@updatesettingmethod');

//-------about info-----//
Route::get('about','backend\backcontroller@aboutmethod');
Route::post('update_about/{id}','backend\backcontroller@updateaboutmethod');

//--------contuct info-------//
Route::get('contuct','backend\backcontroller@contuctmethod');
Route::post('update_contuct/{id}','backend\backcontroller@updatecontuctmethod');

//-------tran @ condition-------//
Route::get('term_condition','backend\backcontroller@termconditionmethod');
Route::post('update_tram/{id}','backend\backcontroller@updatetrammethod');

//-------privacy------//
Route::get('privacy_police','backend\backcontroller@privacypolicemethod');
Route::post('update_policy/{id}','backend\backcontroller@updatepolicymethod');

//--------how to bay -----//
Route::get('how_to_bay','backend\backcontroller@howtobaymethod');
Route::post('update_how/{id}','backend\backcontroller@updatehowmethod');

//----------FAQ  info------------//
Route::get('faq','backend\backcontroller@faqmethod');
Route::get('manage_faq','backend\backcontroller@managefaqmethod');
Route::post('Insert_FAQ','backend\backcontroller@insertfaqmethod');
Route::get('deleteFAQ/{id}','backend\backcontroller@deleteFAQmethod');
Route::get('editFAQ/{id}','backend\backcontroller@editFAQmethod');
Route::post('update_FAQ/{id}','backend\backcontroller@updateFAQmethod');

Route::get('customer_order','backend\order@customer_ordermethod');
Route::post('update/{id}','backend\order@update_ordermethod');


    //------user back work-------//
Route::get('User_Info','backend\backcontroller@User_Infomethod');
Route::get('user_acc_del/{id}','backend\backcontroller@user_acc_delmethod');
Route::get('user_acc_edit/{id}','backend\backcontroller@user_acc_editmethod');
Route::post('Customer_update/{id}','backend\backcontroller@Customer_updatemethod');


// Route::post('user_count','backend\backcontroller@user_countmethod');



//--------authentication----------//
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin','HomeController@adminHome')->name('admin.home')->middleware('is_admin');
