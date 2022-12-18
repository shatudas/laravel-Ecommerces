@extends('fontend.index')
@section('homecontent')

	<!-- Home -->


	

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{url('public/fontlink')}}/images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Smartphones & Tablets</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar pl-2">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">
								<li><a href="#">Computers & Laptops</a></li>
								<li><a href="#">Cameras & Photos</a></li>
								<li><a href="#">Hardware</a></li>
								<li><a href="#">Smartphones & Tablets</a></li>
								<li><a href="#">TV & Audio</a></li>
								<li><a href="#">Gadgets</a></li>
								<li><a href="#">Car Electronics</a></li>
								<li><a href="#">Video Games & Consoles</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Range: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a href="#" style="background: #b19c83;"></a></li>
								<li class="color"><a href="#" style="background: #000000;"></a></li>
								<li class="color"><a href="#" style="background: #999999;"></a></li>
								<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
								<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
								<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
								<li class="brand"><a href="#">Apple</a></li>
								<li class="brand"><a href="#">Beoplay</a></li>
								<li class="brand"><a href="#">Google</a></li>
								<li class="brand"><a href="#">Meizu</a></li>
								<li class="brand"><a href="#">OnePlus</a></li>
								<li class="brand"><a href="#">Samsung</a></li>
								<li class="brand"><a href="#">Sony</a></li>
								<li class="brand"><a href="#">Xiaomi</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">

					<div class="row">

						<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>


						<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>

<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>


						<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>




<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>


<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>



<div  class="col-lg-3 col-md-3 col-sm-4 col-4">
								<div class="product_item is_new" style="width:100%;">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{url('public/fontlink')}}/images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>
						</div>


















					</div>


	
							


							



				</div>
			</div>
		</div>
	</div>

	<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Recently Viewed</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="{{url('public/fontlink')}}/images/view_1.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Beoplay H7</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="{{url('public/fontlink')}}/images/view_2.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="{{url('public/fontlink')}}/images/view_3.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225</div>
										<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="{{url('public/fontlink')}}/images/view_4.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="{{url('public/fontlink')}}/images/view_5.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="{{url('public/fontlink')}}/images/view_6.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$375</div>
										<div class="viewed_name"><a href="#">Speedlink...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{url('public/fontlink')}}/images/brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{url('public/fontlink')}}/images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{url('public/fontlink')}}/images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{url('public/fontlink')}}/images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{url('public/fontlink')}}/images/brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{url('public/fontlink')}}/images/brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{url('public/fontlink')}}/images/brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{url('public/fontlink')}}/images/brands_8.jpg" alt=""></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>


















	<style type="text/css">

		.home
{
	width: 100%;
	height: 260px;
	background: transparent;
}
.home_background
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.home_overlay
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #cde4f1;
	background: linear-gradient(#FFFFFF, #cde4f1);
	opacity: 0.9;
}
.home_content
{
	width: 100%;
	height: 100%;
}

/*********************************
5. Shop
*********************************/

.shop
{
	background: #FFFFFF;
	padding-top: 80px;
	padding-bottom: 139px;
}
.shop_content
{
	width: 100%;
}
.shop_bar
{
	border-bottom: solid 1px #dadada;
	padding-bottom: 14px;
	z-index: 1;
}
.shop_product_count
{
	font-size: 14px;
	font-weight: 500;
	float: left;
}
.shop_product_count span
{
	color: #0e8ce4;
}
.shop_sorting
{
	float: right;
}
.shop_sorting span
{
	display: inline-block;
	font-weight: 500;
}
.shop_sorting > ul
{
	display: inline-block;
	position: relative;
	margin-left: 6px;
}
.shop_sorting ul li
{
	color: rgba(0,0,0,0.5);
	cursor: pointer;
}
.shop_sorting ul li:hover
{
	color: rgba(0,0,0,0.8);
}
.shop_sorting ul li i
{
	display: inline-block;
	font-size: 10px;
	color: rgba(0,0,0,0.5);
	margin-left: 4px;
	vertical-align: middle;
	-webkit-transform: translateY(-1px);
	-moz-transform: translateY(-1px);
	-ms-transform: translateY(-1px);
	-o-transform: translateY(-1px);
	transform: translateY(-1px);
}
.shop_sorting ul li ul
{
	display: block;
	position: absolute;
	top: calc(100% + 15px);
	right: 0;
	text-align: right;
	background: #FFFFFF;
	width: auto;
	padding-top: 15px;
	visibility: hidden;
	opacity: 0;
	box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.shop_sorting ul li:hover ul
{
	top: 100%;
	visibility: visible;
	opacity: 1;
}
.shop_sorting ul li ul li
{
	white-space: nowrap;
	padding-right: 13px;
	padding-left: 20px;
	margin-bottom: 5px;
	border-bottom: solid 1px #f2f2f2;
	padding-top: 5px;
	padding-bottom: 9px;
}
.shop_sorting ul li ul li:last-child
{
	border-bottom: none;
}

/*********************************
5.1 Shop Products
*********************************/

.product_grid
{
	-webkit-transform: translateX(-20px);
	-moz-transform: translateX(-20px);
	-ms-transform: translateX(-20px);
	-o-transform: translateX(-20px);
	transform: translateX(-20px);
	width: calc(100% + 40px);
}
.product_grid_border
{
	display: block;
	position: absolute;
	top: 0px;
	right: 0px;
	width: 3px;
	height: 100%;
	background: #FFFFFF;
	z-index: 1;
}
.product_item
{
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	position: relative;
	width: 20%;
	background: #FFFFFF;
	cursor: pointer;
	padding-top: 40px;
	padding-bottom: 24px;
	text-align: center;
}
.product_border
{
	display: block;
	position: absolute;
	top: 52px;
	right: 1px;
	width: 1px;
	height: calc(100% - 71px);
	background: #e5e5e5;
}
.product_image
{
	width: 100%;
	height: 115px;
}
.product_image img
{
	display: block;
	position: relative;
	max-width: 100%;
}
.product_content
{
	width: 100%;
}
.product_price
{
	font-size: 16px;
	font-weight: 500;
	margin-top: 25px;
}
.product_item.discount
{
	color: #df3b3b;
}
.product_price span
{
	position: relative;
	font-size: 12px;
	font-weight: 400;
	color: rgba(0,0,0,0.6);
	margin-left: 10px;
}
.product_price span::after
{
	display: block;
	position: absolute;
	top: 6px;
	left: -2px;
	width: calc(100% + 4px);
	height: 1px;
	background: #8d8d8d;
	content: '';
}
.product_name
{
	margin-top: 4px;
	overflow: hidden;
}
.product_name div
{
	width: 100%;
	
}
.product_name div a
{
	font-size: 14px;
	font-weight: 400;
	color: #000000;
	white-space: nowrap;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.product_name div a:hover
{
	color: #0e8ce4;
}
.product_fav
{
	position: absolute;
	top: 33px;
	right: 12px;
	width: 36px;
	height: 36px;
	background: #FFFFFF;
	box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
	border-radius: 50%;
	visibility: hidden;
	opacity: 0;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.product_fav:hover
{
	box-shadow: 0px 1px 5px rgba(0,0,0,0.3);
}
.product_fav i
{
	display: block;
	position: absolute;
	left: 50%;
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	-o-transform: translateX(-50%);
	transform: translateX(-50%);
	color: #cccccc;
	line-height: 36px;
	pointer-events: none;
	z-index: 0;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.product_fav.active i
{
	color: red;
}
.product_item:hover .product_fav
{
	visibility: visible;
	opacity: 1;
}
.product_marks
{
	display: block;
	position: absolute;
	top: 33px;
	left: 24px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.product_mark
{
	display: inline-block;
	width: 36px;
	height: 36px;
	border-radius: 50%;
	color: #FFFFFF;
	text-align: center;
	line-height: 36px;
	font-size: 12px;
}
.product_new
{
	display: none;
	background: #0e8ce4;
	visibility: hidden;
	opacity: 0;
}
.product_discount
{
	display: none;
	background: #df3b3b;
	visibility: hidden;
	opacity: 0;
}
.product_item.is_new .product_new,
.product_item.discount .product_discount
{
	display: inline-block;
	visibility: visible;
	opacity: 1;	
}

/*********************************
5.2 Shop Page Navigation
*********************************/

.shop_page_nav
{
	width: 100%;
	height: 50px;
	margin-top: 80px;
}
.page_prev, 
.page_next
{
	width: 50px;
	height: 100%;
	border: solid 1px #e5e5e5;
	border-radius: 5px;
	cursor: pointer;
}
.page_prev i, 
.page_next i
{
	font-size: 12px;
	color: #e5e5e5;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.page_prev:hover i, 
.page_next:hover i
{
	color: #636363;
}
.page_nav
{
	border: solid 1px #e5e5e5;
	border-radius: 5px;
	margin-left: 15px;
	margin-right: 15px;
}
.page_nav li
{
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	width: 50px;
	height: 50px;
	border-right: solid 1px #e5e5e5;
	cursor: pointer;
}
.page_nav li a
{
	font-weight: 500;
	color: rgba(0,0,0,0.7);
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.page_nav li:hover a
{
	color: #0e8ce4;
}
.page_nav li:last-child
{
	border-right: none;
}

/*********************************
6. Shop Sidebar
*********************************/

.shop_sidebar
{
	width: 100%;

}
.sidebar_title
{
	font-size: 18px;
	font-weight: 500;
}
.sidebar_categories
{
	margin-top: 37px;
}
.sidebar_categories li
{
	margin-bottom: 7px;
}
.sidebar_categories li a
{
	color: rgba(0,0,0,0.5);
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.sidebar_categories li a:hover
{
	color: #0e8ce4;
}
.filter_by_section
{
	margin-top: 45px;
}
.filter_price
{
	margin-top: 28px;
}
.slider_range
{
	max-width: 195px;
}
.filter_price p
{
	display: inline-block;
	font-size: 12px;
	font-weight: 500 !important;
	color: rgba(0,0,0,0.5);
	margin-bottom: 0px;
}
.sidebar_subtitle
{
	font-size: 14px;
	font-weight: 500;
	margin-top: 25px;
}
.filter_price p input
{
	font-size: 12px;
	font-weight: 500 !important;
	color: rgba(0,0,0,0.5)
}
.amount
{
	margin-top: 18px;
}
.color_subtitle
{
	margin-top: 27px;
}
.colors_list
{
	margin-top: 14px;
}
.color
{
	display: inline-block;
	margin-right: 6px;
}
.color a
{
	display: block;
	width: 20px;
	height: 20px;
	border-radius: 50%;
}
.brands_subtitle
{
	margin-top: 27px;
}
.brands_list
{
	margin-top: 12px;
}
.brand
{
	margin-bottom: 7px;
}
.brand a
{
	color: rgba(0,0,0,0.5);
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.brand a:hover
{
	color: #0e8ce4;
}

/*********************************
7. Recently Viewed
*********************************/

.viewed
{
	padding-top: 51px;
	padding-bottom: 60px;
	background: #eff6fa;
}
.viewed_title_container
{
	border-bottom: solid 1px #dadada;
}
.viewed_title
{
	margin-bottom: 14px;
}
.viewed_nav_container
{
	position: absolute;
	right: -5px;
	bottom: 14px;
}
.viewed_nav
{
	display: inline-block;
	cursor: pointer;
}
.viewed_nav i
{
	color: #dadada;
	font-size: 18px;
	padding: 5px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.viewed_nav:hover i
{
	color: #606264;
}
.viewed_prev
{
	margin-right: 15px;
}
.viewed_slider_container
{
	padding-top: 50px;
}
.viewed_item
{
	width: 100%;
	background: #FFFFFF;
	border-radius: 8px;
	padding-top: 25px;
	padding-bottom: 25px;
	padding-left: 15px;
	padding-right: 15px;
}
.viewed_image
{
	width: 115px;
	height: 115px;
}
.viewed_image img
{
	display: block;
	max-width: 100%;
}
.viewed_content
{
	width: 100%;
	margin-top: 25px;
}
.viewed_price
{
	font-size: 16px;
	color: #000000;
	font-weight: 500;
}
.viewed_item.discount .viewed_price
{
	color: #df3b3b;
}
.viewed_price span
{
	position: relative;
	font-size: 12px;
	font-weight: 400;
	color: rgba(0,0,0,0.6);
	margin-left: 8px;
}
.viewed_price span::after
{
	display: block;
	position: absolute;
	top: 6px;
	left: -2px;
	width: calc(100% + 4px);
	height: 1px;
	background: #8d8d8d;
	content: '';
}
.viewed_name
{
	margin-top: 3px;
}
.viewed_name a
{
	font-size: 14px;
	color: #000000;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.viewed_name a:hover
{
	color: #0e8ce4;
}
.item_marks
{
	position: absolute;
	top: 18px;
	left: 18px;
}
.item_mark
{
	display: none;
	width: 36px;
	height: 36px;
	border-radius: 50%;
	color: #FFFFFF;
	font-size: 10px;
	font-weight: 500;
	line-height: 36px;
	text-align: center;
}
.item_discount
{
	background: #df3b3b;
	margin-right: 5px;
}
.item_new
{
	background: #0e8ce4;
}
.viewed_item.discount .item_discount
{
	display: inline-block;
}
.viewed_item.is_new .item_new
{
	display: inline-block;
}

/*********************************
8. Brands
*********************************/

.brands
{
	width: 100%;
	padding-top: 90px;
	padding-bottom: 90px;
}
.brands_slider_container
{
	height: 130px;
	border: solid 1px #e8e8e8;
	box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
	padding-left: 97px;
	padding-right: 97px;
}
.brands_slider
{
	height: 100%;
}
.brands_item
{
	height: 100%;
}
.brands_item img
{
	max-width: 100%;
}
.brands_nav
{
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	padding: 5px;
	cursor: pointer;
}
.brands_nav i
{
	color: #e5e5e5;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.brands_nav:hover i
{
	color: #676767;
}
.brands_prev
{
	left: 40px;
}
.brands_next
{
	right: 40px;
}


	</style>








	@endsection