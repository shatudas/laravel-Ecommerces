@php
$setting=DB::table('setting_information')->first();
$contenttable=DB::table('contuct')->first();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{$setting->title}}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OneTech shop project">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Kufam:wght@500&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web&amp;display=swap" rel="stylesheet">
	
	<!-----favicon----->
	<link rel="icon" type="image/x-icon" href="{{url($setting->favicon)}}">
	<!-----fontawesome icon----->
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/styles/bootstrap4/bootstrap.min.css">
	<link href="{{url('public/fontlink')}}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<!-----fa fa icon----->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<!-----slider--------->
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/plugins/slick-1.8.0/slick.css">
	<!-----index page link------->
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/styles/contact_responsive.css">
	<!------data table-------->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
	<!-----single view page------>
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/product_view_link/style.css">
	<link media="all" type="text/css" rel="stylesheet" href="{{url('public/fontlink')}}/product_view_link/select2.min.css"> 
	<!--------cart------>
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/card-file/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/card-file/style.css">
	<!-----toster------->
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/styles/toast.css">


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="{{url('public/fontlink')}}/product_view_link/jquery-3.3.1.min.js"></script>
	<script src="{{url('public/fontlink')}}/product_view_link/jquery.js"></script>
	<script type="text/javascript" src="{{url('public/fontlink')}}/product_view_link/xzoom.min.js"></script>


	<!-------Show password------>
 <script type="text/javascript"> 
  function passFunction() {
   var x = document.getElementById("shatu");
   if (x.type === "password") {
    x.type = "text";
   } else {
    x.type = "password";
   }
  }
 </script>
<!---------Show comfirm password------->
 <script type="text/javascript"> 
  function MyFunction() {
   var x = document.getElementById("dasdas");
   if (x.type === "password") {
    x.type = "text";
   } else {
    x.type = "password";
   }
  }
 </script>

	<!-------scrollbar css------->	
	<style type="text/css">
		::-webkit-scrollbar {
			width: 4px;
			height:5px;
		}
		::-webkit-scrollbar-track {
			background:#fff; 
		}
		::-webkit-scrollbar-thumb {
			background:gray; 
		}
		::-webkit-scrollbar-thumb:hover {
			background:#D7DBDD; 
		}
	</style>
	<!-------cart css------->	
	<style type="text/css">
		.catagory-hide{
			display: none;
		}
	</style>

</head>


<body>

	<div class="super_container" style="display:initial;">

		<header class="header" style="display: initial;">
			<!-------top header------>
			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{url('public/fontlink')}}/images/phone.png" alt=""></div>{{ $setting->phone }}</div>
							<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{url('public/fontlink')}}/images/mail.png" alt=""></div><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></div>
							<div class="top_bar_content ml-auto">
								<div class="top_bar_user">
									<div class="user_icon"><img src="{{url('public/fontlink')}}/images/user.svg" alt=""></div>
									<div>
										@if( Auth::check())
										<a href="{{url('userdashboard')}}"  style="text-decoration:none;">{{ Auth()->user()->name }}</a>
										@else
										<a data-toggle="modal" data-target="#staticBackdrop" style="text-decoration:none;" >Register</a>
										@endif



									</div>
									<div><a href="{{url('login')}}" target="_blank">Sign in</a></div>
								</div>
							</div> 
						</div>
					</div>
				</div>		
			</div>

			<nav class="main_nav" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
				<div class="container-fluid"  >
					<div class="row">
						<div class="col">

							<div class="main_nav_content d-flex flex-row">
								<!-- Categories Menu -->
								<div class="cat_menu_container" style="z-index:1000;">
									<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
										<div class="cat_menu_text">
											<a href="{{url('/')}}">
												<img src="{{ url($setting->setting_image) }}" class="img-fluid" style="height:65px;" alt="">
											</a>
										</div>
										<div class="cat_burger d-none d-lg-inline-block" id="cat_burger" >
											<span></span><span></span><span></span>
										</div>
									</div>

									@php
									$item=DB::table('item_information')->orderBy('id','ASC')->where('status',1)->get();
									$category=DB::table('category_information')->where('status',1)->get();
									$subcategory=DB::table('subcategory_information')->where('status',1)->get();
									@endphp

									<ul class="cat_menu" style="padding-top:-10px !important;">
										<!-----main menu----->
										@if(isset($item))
										@foreach($item as $itemView)

										<li class="hassubs">
											<a href="{{url('itemProduct/'.$itemView->id)}}">{{$itemView->item_name}}<i class="fas fa-chevron-right"></i></a>
											<ul>
												<!----sub menu------>
												@if(isset($category))
												@foreach($category as $categoryView)
												@if($itemView->id == $categoryView->item_id)
												<li class="hassubs">
													<a href="{{url('catProduct/'.$categoryView->id)}}">{{ $categoryView->category_name}}<i class="fas fa-chevron-right"></i></a>
													<ul>
														<!-----sub==Sub menu------->
														@if(isset($subcategory))
														@foreach($subcategory as $subcategoryView)
														@if($categoryView->id == $subcategoryView->category_id)
														<li class="hassubs">
															<a href="{{url('SubcatProduct/'.$subcategoryView->id)}}">{{ $subcategoryView->subcategory_name}}<i class="fas fa-chevron-right"></i></a>
														</li>
														@endif
														@endforeach
														@endif
													</ul>
													<!-----sub==sub menu------>
												</li>
												@endif
												@endforeach
												@endif
											</ul>
											<!-----sun menu------>
										</li>

										@endforeach
										@endif
									</ul>
								</div>



								<div class="main_nav_menu ml-auto">

									<div class="col-12">
										<div class="row">
											<div class="col-7" id="search_div">
												<div class="header_search">
													<div class="header_search_content">
														<div class="header_search_form_container">
															<form action="{{url('search')}}" method="get" class="header_search_form clearfix">
																@csrf
																<input type="search" name="Prosearch" required="required" class="header_search_input" placeholder="Search for products..." >
																<div class="custom_dropdown" >
																	<div class="custom_dropdown_list">
																		<span class="custom_dropdown_placeholder clc"></span>

																		<ul class="custom_list clc">
																		</ul>
																	</div>
																</div>
																<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{url('public/fontlink')}}/images/search.png" alt=""></button>
															</form>
														</div>
													</div>
												</div>

											</div>

											<div class="col-5" align="center">
												<ul class="standard_dropdown main_nav_dropdown" >
													<li><a href="{{url('blog')}}">Offer<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="{{url('contact')}}">Contact<i class="fas fa-chevron-down"></i></a></li>
													<li class="hassubs">
														<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
														<ul>
															<li><a href="{{url('cart')}}">Cart<i class="fas fa-chevron-down"></i></a></li>
															<li><a href="{{url('product')}}">Product<i class="fas fa-chevron-down"></i></a></li>
															<li><a href="{{url('blog')}}">Blog<i class="fas fa-chevron-down"></i></a></li>
															<li><a href="#">future products<i class="fas fa-chevron-down"></i></a></li>
														</ul>
													</li>
												</ul>
											</div>

										</div>
									</div>

								</div>

								<div class="menu_trigger_container ml-auto">
									<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
										<div class="menu_burger">
											<div class="menu_trigger_text">menu</div>
											<div class="cat_burger menu_burger_inner " id="menu_burger_inner"> <i class="fa fa-bars"></i></div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</nav>


			<div class="page_menu">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="page_menu_content">
								<div class="page_menu_search">
									<form action="{{url('search')}}" method="get" >
										@csrf
										<input type="search" name="Prosearch" required="required" class="page_menu_search_input" placeholder="Search for products...">
									</form>
								</div>
								<ul class="page_menu_nav">

									<li class="page_menu_item has-children">
										<a href="#">Offer</i></a>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Contuct</i></a>
									</li>
									<li class="page_menu_item has-children">
										<a href="#">Pages<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="{{url('cart')}}">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{url('product')}}">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="{{url('blog')}}">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">future products<i class="fas fa-chevron-down"></i></a></li>	
										</ul>
									</li>
								</ul>
								<div class="menu_contact">
									<div class="menu_contact_item" style="width:25%;"><div class="menu_contact_icon"><i class="fa fa-user-circle-o"></i></div><a href="#">Register</a></div>
									<div class="menu_contact_item"><div class="menu_contact_icon"><i class="fa fa-sign-in"></i></div><a href="{{url('login')}}">Sign In</a></div>
								</div>
								<div class="menu_contact">
									<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{url('public/fontlink')}}/images/phone_white.png" alt=""> {{ $setting->phone }} </div></div>
									<div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{url('public/fontlink')}}/images/mail_white.png" alt=""></div><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>


		<!----------mastering code------->

		@yield('homecontent')




		<!-- Subscribe div -->
		<div class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
							<div class="newsletter_title_container">
								<div class="newsletter_icon"><img src="{{url('public/fontlink')}}/images/send.png" alt=""></div>
								<div class="newsletter_title">Sign up for Newsletter</div>
								<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
							</div>
							<div class="newsletter_content clearfix">
								<form action="#" class="newsletter_form">
									<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
									<button class="newsletter_button">Subscribe</button>
								</form>
								<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>



		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 footer_col">
						<div class="footer_column footer_contact">
							<div class="logo_container">
								<div class="logo" ><a href="#"><img src="{{ url($setting->setting_image) }}" class="img-fluid" alt="" style="height:80px;"></a></div>
							</div>
							<br>
							<div class="footer_title text-white">Got Question? Call Us 24/7</div>
							<div class="footer_contact_text">
								<span class="foot_text">Phone</span><br>
								<p class="P_TEXT">{{$contenttable->phone}}</p>
								<span class="foot_text">Email</span><br>
								<p class="P_TEXT">{{$contenttable->email}}</p>
								<span class="foot_text">Address</span><br>
								<p class="P_TEXT text-white">{!! $contenttable->details !!}</p></span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 ">
						<div class="footer_column">
							<div class="footer_title">QUICK LINKS</div>
							<ul class="footer_list">
								<li><a href="{{url('about_us')}}">About Us</a></li>
								<li><a href="{{url('contact')}}">Contuct Us</a></li>
								<li><a href="{{url('FAQ_page')}}">FAQs</a></li>
								<li><a href="{{url('Term_condition')}}">Term & Condition</a></li>
								<li><a href="{{url('Privacy_Policy')}}">Privacy & Policy</a></li>
								<li><a href="{{url('how_to')}}">	How To Bay</a></li>
							</ul>

						</div>
					</div>


					<div class="col-lg-3">
						<div class="footer_column">
							<div class="footer_title">Customer Care</div>
							<ul class="footer_list">

								@if( Auth::check())
								<li><a href="{{url('userdashboard')}}">My Account</a></li>
								@else
								<li><a href="" data-toggle="modal" data-target="#staticBackdrop">My Account</a></li>
								@endif
								@if( Auth::check())
								<li><a href="{{url('userdashboard')}}">Order Tracking</a></li>
								@else
								<li><a href="" data-toggle="modal" data-target="#staticBackdrop">Order Tracking</a></li>
								@endif

								<li><a href="#">Wish List</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Returns / Exchange</a></li>
								
								<li><a href="#">Product Support</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="footer_column">

							<div class="footer_social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									<li><a href="#"><i class="fab fa-google"></i></a></li>
									<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								</ul>
							</div>

							<div>
								<iframe src="{{url($contenttable->location)}}" id="map_frim"></iframe>
							</div>

						</div>
					</div>

				</div>
			</div>
		</footer>

		<div class="py-3" id="buttom_footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6">
						<center>Copyright &copy; <?php echo date("Y"); ?> All rights reserved |  by <a href="#" target="_blank">
							<img src="{{ url($setting->setting_image) }}" class="img-fluid" alt=""  style="width:70px; z-index:100;">
						</a></center>
					</div>
					<div class="col-lg-6 col-sm-6" style="background-color:#ccc;">
						<center>
							<div class="logos ml-sm-auto">
								<ul class="logos_list">
									<li><a href="#"><img src="{{url('public/fontlink')}}/images/logos_1.png" alt=""></a></li>
									<li><a href="#"><img src="{{url('public/fontlink')}}/images/logos_2.png" alt=""></a></li>
									<li><a href="#"><img src="{{url('public/fontlink')}}/images/logos_3.png" alt=""></a></li>
									<li><a href="#"><img src="{{url('public/fontlink')}}/images/logos_4.png" alt=""></a></li>
								</ul>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Modal</title>
	</head>

	<script>
		function validateForm() {
			var pw1 = document.getElementById("shatu").value;
			var pw2 = document.getElementById("dasdas").value;
			if(pw1 == ""){
				document.getElementById("message1").innerHTML = "**Fill the password please!";
				return false;
			}
			if(pw2 == "") {
				document.getElementById("message2").innerHTML = "**Enter the comfirm password please!";
				return false;
			} 
			if(pw1.length < 8){
				document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
				return false;
			}
			if(pw1.length > 15){
				document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
				return false;
			}
			if(pw1 != pw2){
				document.getElementById("message2").innerHTML = "**Passwords are not same";
				return false;
			}  
		}
	</script>

	<body>

		<div class="modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Login/Register</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">

						<div class="col-lg-12 col-12 mt-4">
							<div class="container-fluid">
								<ul class="nav nav-pills nav-justified " id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#Sellers" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#Buyers" role="tab" aria-controls="pills-profile" aria-selected="false">Register</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="tab-content" id="pills-tabContent">

							<div class="tab-pane fade show active" id="Sellers" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="col-lg-12 col-md-12 col-sm-10 col-12 pt-4 pb-5">
									<div class="container-fluid">
										<div class="col-sm-12 col-12 p-4 bg-white loginback">
											<h5 class="text-uppercase">Login your Account</h5><hr>
											<form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
												@csrf
												<div class="row p-2">
													<div class="form-group mform col-sm-12">
														<label>Email/Mobile</label>
														<input id="email" type="email" class="form-control textfill @error('email') is-invalid @enderror" name="email" placeholder="Email/Mobile" value="{{ old('email') }}" required autocomplete="email" autofocus>
														@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>

													<div class="form-group mform col-sm-12">
														<label>Password</label>
														<input type="password" id="password" class="form-control textfill @error('password') is-invalid @enderror" name="password" placeholder="Password" required="" >

														<i class="far fa-eye" id="togglePassword"  style="cursor: pointer;margin-top:12px;"></i>

														@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
													<div class="form-group mform col-sm-12">
														<div class="col-md-6 offset-md-4">
															<div class="form-check">
																<input class="form-check-input" type="checkbox" name="remember" onclick="Function()"> 
																<label class="form-check-label" for="remember">Remember Me </label>
															</div>
														</div>
													</div>
													<div class="form-group mform col-sm-12"> 
														<a href="#" style="text-align:right">Forgot Account ?</a>
													</div>
													<div class="form-group mform col-sm-12">
														<center>
															<input type="submit" id="btn" value="LOGIN" class="form-control logbutton w-50" style="background:#0a0a0a;">
														</center>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="Buyers" role="tabpanel" aria-labelledby="pills-profile-tab">
								<form method="post" action="{{url('register')}}" onsubmit ="return validateForm()">
									@csrf
									<div class="col-lg-12 col-12 pt-4 pb-5">
										<div class="container-fluid">
											<div class="col-sm-12 col-12 p-4 bg-white loginback">
												<h5 class="text-uppercase">User Registation</h5><hr>
												<div class="row p-2">

													<div class="form-group mform col-sm-12">
														<label>Name</label>
														<input type="text" class="form-control textfill" name="name" placeholder="Name" required="">
													</div>

													<div class="form-group mform col-sm-12">
														<label>Email</label>
														<input type="email" class="form-control textfill" name="email" placeholder="Email">
													</div>

													<div class="form-group mform col-sm-12">
														<label>Phone</label>
														<input type="text" class="form-control textfill" name="phone" id="phone" placeholder="Mobile" value="" required="">
													</div>

													<div class="form-group mform col-sm-6">
														<label>Password</label>
														<input type="Password" class="form-control textfill"  name="password" id="shatu" placeholder="Password" value="" onkeyup="checkpassword()">
															<small>
																<input type="checkbox" class="ml-3" onclick="passFunction()">
									       <i style="color:#95A5A6;">Show Password</i>
								       </small>
														 <span id = "message1" style="color:red"></span>

													</div>

													<div class="form-group mform col-sm-6">
														<label>Confirm Password</label>
														<input type="Password"  class="form-control textfill" name="confirm_password" id="dasdas" placeholder="Confirm Password"  value="" >
															<small>
																<input type="checkbox"  class="ml-3" onclick="MyFunction()">
									     	<i style="color:#95A5A6;">Show confirm Password</i>
									     	</small>
														<span id="message2" style="color:red"></span>
													</div>

													<div class="form-group mform col-sm-12">
														<label>Address</label>
														<textarea class="form-control textfill2" rows="3" placeholder="Address" name="address" ></textarea>
													</div>

													<div class="form-group mform col-sm-12">
														<input type="submit" id="submit" value="SIGN UP" class="d-block form-control logbutton w-50" style="background:#0a0a0a;couser:pointer">
													</div>

												</div>
											</div>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>

				</div>
			</div>

		</div>

	</body>
	</html>

	<!---------card desing---------->

	<!------show icen------------->
	<center>
		<div class="addtocart" id="cat_box">
			<a id="myBtns">
				<img src="{{url('public/fontlink')}}/card-file/shopper.svg" class="img-fluid">
				<br>
				<span style="color: #fff;"><span id="cartqunt">{{Cart::Count()}}</span> ITEMS</span>
				<br>
				<span><span id="cartamount">{{Cart::subtotal()}}</span> TK</span>
			</a>
		</div>
	</center>

	<!-----card defult hide div----------->
	<div  id="cat_div"  class="card_div">

		<div class="card-header bg-light" style="">
			<div class="row">
				<div class="col-sm-4 col-4">
					My Cart
				</div>
				<div class="col-sm-4 col-4">
					<a href="{{url('cler')}}"  class="btn text-center p-0" style="color:#000;">
						All Cler
					</a>
				</div>
				<div class="col-sm-4 col-4">
					<span id="cat_view" class="fa fa-close float-right"></span>
				</div>
			</div>
		</div>




		<!------ product show -------->
		<div class="card-body p-0" id="cardbody">
			<div id="cartshow">
				@php
				$card=Cart::content();
				@endphp

				@if(isset($card))
				@foreach($card as $cartdata)

				<div class="col-sm-12 col-12 p-0 card-product-div">
					<div class="row">
						<div class="col-sm-3 col-3">
							<center>
								<img src="{{url($cartdata->options->product_image) }}" class="img-fluid card-img">
							</center>
						</div>

						<div class="col-sm-7 col-7">
							<span class="card-text">{{$cartdata->name}}</span><br>
							<span class="card-text-1">{{$cartdata->price}} &nbsp;* {{$cartdata->qty}}
								@php
								$productprice=$cartdata->price;
								$qty=$cartdata->qty;
								$product_T_price=$productprice*$qty;
								@endphp
								<span>=&nbsp;{{ $product_T_price }} TK</span> </span>
							</div>
							<div class="col-sm-2 col-2">
								<span>
									<a href="{{url('remove/'.$cartdata->rowId)}}">
										<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="trash">
											<polyline fill="none" stroke="#E55B48" points="6.5 3 6.5 1.5 13.5 1.5 13.5 3"></polyline>
											<polyline fill="none" stroke="#E55B48" points="4.5 4 4.5 18.5 15.5 18.5 15.5 4"></polyline>
											<rect x="8" y="7" width="1" height="9"  stroke="#E55B48"></rect>
											<rect x="11" y="7" width="1" height="9" stroke="#E55B48" ></rect>
											<rect x="2" y="3" width="16" height="1" stroke="#E55B48" ></rect>
										</svg>
									</a>
								</span>
							</div>
						</div>
					</div>

					@endforeach
					@endif

				</div>
			</div>


			<!-------footer div--------->
			<div class="col-sm-12 col-12 p-0 card-fotter" id="card_bottom">
				<div class="card-footer bg-dark mt-2">
					<div class="col-sm-12 col-12">
						<center>
							<span class="total">TOTAL =&nbsp;<span id="cartprice">{{Cart::subtotal()}}</span> TK</span>
						</center>
					</div>
				</div>

				<div class="card-footer"  id="card_bottom2">
					<div class="col-sm-12 col-12">
						<center>
							@if( Auth::check())
							<a href="{{url('chack_out')}}" class="orders">
							CHECKOUT</a>
							@else
							<a href="" class="orders"  data-toggle="modal" data-target="#staticBackdrop" >
							CHECKOUT</a>
							@endif
						</center>
					</div>
				</div>
			</div>

		</div>



		<style type="text/css">

			.use_reg{
				text-decoration:none;
			}
			.mform label{
				color: #414141;
				font-weight: normal;
				font-size: 15px;
			}

			.textfill{
				height: 50px;
				background-color: #fff;
				color: #414141;
				border-radius: 0px;
				transition: 0.9s;
				border:2px solid #f1f1f1;
				font-size: 15px;
				font-weight: normal;
			}

			.textfill:focus{
				box-shadow: none;
				border:2px solid #414141;
			}

			.textfill2{
				background-color: #fff;
				border-radius: 0px;
				border:2px solid #f1f1f1;
				font-size: 15px;
				color: #414141;
				transition: 0.9s;
			}

			.textfill2:focus{
				box-shadow: none;
				border:2px solid #585858;
			}

			.list-group .headlist{
				background: #585858;
				color: #fff;
				font-size: 22px;
				border-radius: 0px;
				border:none;
				line-height: 35px;
				text-transform: uppercase;
			}

			.loginback{
				box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.10) !important;
			}

			.logbutton{
				background-color: #dc3545;
				color: #fff;
				padding: 10px;
				border-radius: 0px;
				width: 50%;
				font-weight: bold;
				cursor: pointer;
				border:none;
			}

			.logbutton:focus{
				background-color: #dc3545;
				color: #fff;
				box-shadow: none;
				border:none;
			}

			.loginback h5{
				font-size: 20px;
				font-weight: bold;
				color: #585858;
			}

			.loginback a{
				text-decoration: none;
				color: gray;
				font-size: 13px;
				transition: 0.5s;
			}



			.loginback a:hover{
				text-decoration: none;
				color: #dc3545;
			}

			.nav .nav-link{
				font-size: 14px;
				color: #414141;
				transition: 0.4s;
				padding: 15px 30px;
				background: #fff;
				border: 1px solid #f1f1f1;
				border-radius: 0px;
				text-transform: uppercase;
			}

			.nav .nav-link:focus{
				color: #fff;
			}

			.nav .nav-link.active {
				color: #fff;
				background: #343a40;
			}



			.main_nav_content{
				height:80px;
			}
			.cat_menu_text{
				margin-left:0px;
			}
			#cat_burger{
				margin-left:20px;
				background-color:#CACFD2;
			}
			.main_nav_menu{
				width:100%;
			}
			#search_div{
				padding-top:20px;
				float:right;
			}

			.header_search_input{
				width:92%;
				background-color:#F4F4F4;
			}

			.custom_dropdown{
				display:disabled;
			}

			.menu_trigger{
				height:90px;
			}

			.menu_burger{
				height:90px;
			}

			.menu_trigger_text{
				margin-top:30px;
			}


			#menu_burger_inner{
				font-size:22px;
				line-height:10px;
				font-weight:400;
			}

			.footer{
				background-color:#111111;
				padding-top:8px;
				padding-bottom:0px;
			}

			.footer_contact_text{
				font-size:13px;
			}

			#map_frim{
				margin-top:10px;
				width:100%;
				max-height:270px;
				min-height:220px;

			}

			#buttom_footer{
				background-color:#CCCCCC;
			}


			.card_div
			{
				background-color:#FFFFFF;
				padding:0px;
				margin-top:0px;
				position: fixed;
				top:0px;
				right:-100%;
				z-index:1000;
				height:100vh;
				width:350px;
				box-shadow: -5px 0px 5px -1px rgba(0,0,0,0.44);
				-webkit-box-shadow: -5px 0px 5px -1px rgba(0,0,0,0.44);
				-moz-box-shadow: -5px 0px 5px -1px rgba(0,0,0,0.44);
				/*	overflow-y:scroll;*/
			}

			.card-header{
				color: #000;
				border-radius:0px;
				border:none;
				font-weight:600;
			}

			.card-body{
	/*	overflow-x:hidden; 
	overflow-y:scroll;*/
}
.card-product-div{
	border-bottom:1px solid lightgray;

}
.card-text
{
	font-size:13px;
}

.card-text-1{
	font-size:15px;
}

.card-text-1 span{
	color:#E55B48;
}

.card-img{
	padding:4px;
}

#card_bottom{
	bottom:0;
	position:absolute;
	width: 100%;
}
#card_bottom2
{
	background-color: #ff5500;
}
#card_bottom2 a{
	color:white
}


.class
{ animation: animate 1s forwards;
}
@keyframes animate 
{ 0%
	{ right: 0;
		} 100%
		{ right: -100%;
		}
	}
	.class2
	{ animation: animate2 1s forwards;
	}
	@keyframes animate2 
	{ 0%
		{ right: -100%;
			} 100%
			{ right: 0px;
			}
		}

		.foot_text{
			color:#FF8500;
			text-transform:uppercase;
			font-size:15px;
		}
		.P_TEXT{
			color:#fff ! important;
			margin-left:5px;
		}
		.footer_title
		{
			color:#fff;
			font-weight:600;
		}
		.footer_list li a 
		{
			color:#fff;
		}
		.footer_list li{
			padding:2px;
		}
	</style>

	<!-----user login password show------->

	<script type="text/javascript"> 
		function Function() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>

	<!-----add To card hide and Show script--------->
	<script type="text/javascript">
		cart = document.querySelector("#cat_box");
		cartPlus = document.querySelector("#cat_div");
		cartvi = document.querySelector("#cat_view");

		cart.addEventListener('click', function(){
			cart.classList.add('class');
			cart.classList.remove('class2');
			cartPlus.classList.add('class2');
			cartPlus.classList.remove('class');
		})
		cartvi.addEventListener('click', function(){
			cart.classList.add('class2');
			cart.classList.remove('class');
			cartPlus.classList.add('class');
			cartPlus.classList.remove('class2');
		})
	</script>

	<script src="{{url('public/fontlink')}}/js/jquery-3.3.1.min.js"></script>
	<script src="{{url('public/fontlink')}}/styles/bootstrap4/popper.js"></script>
	<script src="{{url('public/fontlink')}}/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="{{url('public/fontlink')}}/plugins/greensock/TweenMax.min.js"></script>
	<script src="{{url('public/fontlink')}}/plugins/greensock/TimelineMax.min.js"></script>
	<script src="{{url('public/fontlink')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="{{url('public/fontlink')}}/plugins/greensock/animation.gsap.min.js"></script>
	<script src="{{url('public/fontlink')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="{{url('public/fontlink')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="{{url('public/fontlink')}}/plugins/slick-1.8.0/slick.js"></script>
	<script src="{{url('public/fontlink')}}/plugins/easing/easing.js"></script>
	<script src="{{url('public/fontlink')}}/js/custom.js"></script>

	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable( {
				responsive: true,
				"order": [[ 0, "desc" ]],

			} );
		} );
	</script>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<script>
		@if (Session::has('messege'))
		var type="{{ Session::get('alert-type', 'info') }}"
		switch(type){
			case 'info':
			toastr.options.positionClass = 'toast-top-right';
			toastr.info("{{ Session::get('messege') }}");
			break;
			case 'success':
			toastr.options.positionClass = 'toast-top-right';
			toastr.success("{{ Session::get('messege') }}");
			break;
			case 'warning':
			toastr.options.positionClass = 'toast-top-right';
			toastr.warning("{{ Session::get('messege') }}");
			break;
			case 'error':
			toastr.options.positionClass = 'toast-top-right';
			toastr.error("{{ Session::get('messege') }}");
			break;
		}
		@endif
	</script>


	<!-----auto dropdown menu------->
	<script type="text/javascript">
		var status = true;
		cat_menu_container=document.querySelector(".cat_menu_container");
		cat_menu_container.addEventListener("mouseover",function () {
			this.children[1].style.display='block';
		});
		cat_menu_container.addEventListener("mouseout",function () {
			this.children[1].style.display='none';
		});

		cat_menu_container.addEventListener("click",function () {
			if(this.children[1].style.display!='none'){
				this.children[1].style.display='none';
			}else{
				this.children[1].style.display='block';
			}
		})
		window.addEventListener("scroll",function () {
			if(window.scrollY>200){
				cat_menu_container.children[1].style.display='none';
			}
			else{
				cat_menu_container.children[1].style.display='block';
			}
		})
	</script>

</body>
</html>

