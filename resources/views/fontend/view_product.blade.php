@extends('fontend.index')
@section('homecontent')

<div class="col-sm-12 col-12 pt-3 pb-3 bg-light">
	<div class="container" >
		<div class="row bg-white p-2 pt-4">

			@if(isset($viewpro))
			<!--------image div------->
			<div class="col-lg-4 col-md-12 col-sm-12 col-12">
				<section id="magnific">
					<div class="xzoom-container" style="border:1px solid #ccc; padding:5px;">
						<img class="xzoom5 img-fluid" id="xzoom-magnific" src="{{url($viewpro->product_image)}}" xoriginal="{{url($viewpro->product_image)}}"  style="width:100%;">
					</div>    
				</section>    
			</div>

			<!------middel div ------>
			<div class="col-lg-5 col-md-12 col-sm-12 col-12">
				<div class="col-sm-12 col-12 singledetails p-0">
					<h3>{{($viewpro->product_name)}}</h3><br>
					<span style="font-size:16px; color:#212F3C; font-weight:600; ">#Product Code: &nbsp; {{($viewpro->product_code)}}</span><br><br>
					<span style="color:gray; padding-top:18px; font-size:16px;">Item Name :{{$viewpro->item_name}}</span><br>
					<span style="color:gray; padding-top:18px; font-size:16px; ">Category Name :{{($viewpro->category_name)}}</span><br>
					<span style="color:gray; padding-top:18px; font-size:16px; ">Brand Name  :  
						@if($viewpro->brand_name)
						{{$viewpro->brand_name}}
						@else
						no brand
						@endif
					</span><br><br>

					<form method="post" action="{{url('addtocart/'.$viewpro->id)}}">
						@csrf

						<div class="form-group row mt-2" >
							<label class="col-sm-2 col-form-label">Size</label>
							<div class="col-sm-4">
								<select class="form-control textfill w-100" name="size" >
									@if(isset($productsize))
									@foreach($productsize as $prosize)
									<option value="{{$prosize}}">{{$prosize}}</option>
									@endforeach
									@endif
								</select>
							</div>
						</div>

						<div class="form-group row mt-2" >
							<label class="col-sm-2 col-form-label">Color</label>
							<div class="col-sm-4">
								<select class="form-control textfill w-100" name="color" >
									@if(isset($productcolor))
									@foreach($productcolor as $procolor)
									<option value="{{$procolor}}">{{$procolor}}</option>
									@endforeach
									@endif
								</select>
							</div>
						</div>

						<span class="stock_in">
							@if($viewpro->stock_status == 1)
							STOCK IN
							@else
							<span style="color:red;">STOCK OUT</span>
							@endif
						</span><br><br>
						
						@php
						$old_price=$viewpro->sale_price;
						$dis_price=$viewpro->Discount_price;
						$present_price=$old_price-$dis_price;
						@endphp

						@if($viewpro->Discount_price)
						<span class="product_price" style="font-size:20px;">BDT {{($present_price)}} TK</span>&nbsp;
						<span style="font-size:14px; color:#000;">Discount ({{$viewpro->Discount_price}})</span>
						@endif
						<br><br>


						@if($viewpro->Discount_price)
						<del><span class="product_price_del">BDT {{($viewpro->sale_price)}} TK</span></del>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
						@else
						<span class="product_price">BDT {{($viewpro->sale_price)}} TK</span>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
						@endif

						@if(isset($viewpro->Discount_price))
						@php
						$dis=$viewpro->Discount_price / $viewpro->sale_price*100;
						@endphp
						<span style="color:#000; font-size:18px;">-{{ceil($dis)}} % OFF</span><br>
						@endif
						<br><br>

						<label>Quantity:&nbsp;<input type="number" value="{{($viewpro->quantity)}}"  min="{{($viewpro->quantity)}}" name="Quantity" id="Quantity-4080">&nbsp;&nbsp;<br><br>

							<button type="submit" class="d-inline bag" style="color:white; cursor:pointer;">Add To Cart</button>

						</form>

						<a class="d-inline buy" data-toggle="modal" data-target="#staticBackdrop" style="color:white">Buy Now</a>
					</label><br><br>
					<span id="status_sms"></span>

					<span style="font-size: 12px;font-weight: bold;">Minimum quantity:{{($viewpro->quantity)}}</span><br><br>

					<span>Share With :</span><br>

				</div>
			</div>

			@else
			@endif


			<!-------right div------->
			<div class="col-lg-3 col-md-12 col-sm-12 col-12 bg-light p-4  text-dark border" style="font-size: 14px;">
				<div class="product-ads-content" style="margin: 0px; padding: 0px 15px 20px; border: 1px solid rgb(222, 222, 222); border-radius: 4px; background: rgba(0, 146, 69, 0.03); color: rgb(51, 51, 51); letter-spacing: 0.7px;">
					<ul class="items" style="font-family: poppins, sans-serif, margin-bottom: 0px; padding: 0px; list-style: none none; border-right: none;">
						<li style="margin: 0px; padding: 5px 0px; list-style: none;">
							<span class="fa fa-exchange" style="margin: 0px; padding: 0px; font-size: 20px; position: relative; left: 0px; color: rgb(255, 71, 71); top: 30px;">	&nbsp;
							</span><h4 style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 0px 26px; font-weight: 700; line-height: 30px; font-size: 16px;">3 Days Return</h4>
							If goods have problems
						</li>

						<li style="margin: 0px; padding: 5px 0px; list-style: none;">
							<span class="fa fa-thumbs-o-up" style="margin: 0px; padding: 0px; font-size: 20px; position: relative; left: 0px; color: rgb(255, 71, 71); top: 30px;">&nbsp;</span>
							<h4 style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 0px 26px; font-weight: 700; line-height: 30px; font-size: 16px;">Authentic Product</h4>
							100% authentic products
						</li>

						<li style="margin: 0px; padding: 5px 0px; list-style: none;">
							<span class="fa fa-lock" style="margin: 0px; padding: 0px; font-size: 20px; position: relative; left: 0px; color: rgb(255, 71, 71); top: 30px;">&nbsp;</span>
							<h4 style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 0px 26px; font-weight: 700; line-height: 30px; font-size: 16px;">Secure Payment</h4>
							100% secure payment
						</li>

						<li style="margin: 0px; padding: 5px 0px; list-style: none;">
							<span class="fa fa-headphones" style="margin: 0px; padding: 0px; font-size: 20px; position: relative; left: 0px; color: rgb(255, 71, 71); top: 30px;">&nbsp;</span>
							<h4 style="margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 0px 26px; font-weight: 700; line-height: 30px; font-size: 16px;">Dedicated support</h4>
							From 10 am-10 pm Sat-Thu
						</li>
					</ul>
				</div>

				<div class="product-ads-banner" style="margin: 0px; padding: 0px; float: left; color: rgb(51, 51, 51); font-family: poppins, sans-serif, &quot;helvetica neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.7px;"><br>
				</div>

				<div><br></div>

				@if(isset($setting))
				<div>
					<div style="background-color:#fff;" align="center">
						<img src="{{url($setting->setting_image)}}" class="img-fluid" style="height:70px;margin-top:5px;">
						<br>
						<span>
							<i class="fa fa-phone" style="font-size:20px; font-weight:700;"></i><br>
							<label style="color:#000; font-size:16px;">{{$setting->phone}}</label><br>
							<a href="mailto:{{$setting->email}}" style="text-decoration:none; color:#000;">
								<i class="fa fa-envelope" style="font-size:20px; font-weight:700;"></i><br>
								<label style="color:#000; font-size:16px;">{{$setting->email}}</label><br>
							</a>
							<br>
						</div>
					</div>
					@endif

				</div>
			</div>
		</div>
	</div>




	@if(isset($viewpro))
	<!--------Description div---------->
	<div class="col-sm-12 col-12 mt-5 mb-5" >
		<div class="container-fluid">

			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#Description"
					role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#Condition" role="tab"
					aria-controls="profile" aria-selected="false">Condition</a>
				</li>
			</ul>

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active mt-3" id="Description" role="tabpanel" aria-labelledby="home-tab">
					<ul>
						<li><span style="font-family: Arial; color:#000;">{!!$viewpro->short_detalis!!}</span></li>
						<h4>Product Detalis</h4>
						<hr>
						<li><span style="font-family: Arial; margin-top:30px; color:#000;">{!!$viewpro->full_detalis!!}</span></li>
					</ul>
				</div>
				<div class="tab-pane fade mt-3" id="Condition" role="tabpanel" aria-labelledby="profile-tab">
				</div>
			</div>

		</div>
	</div>

	@endif

	<!------related product------->
	<div class="viewed" style="background-color:#F1F7FB;" >
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="viewed_title_container">
						<span><h4>RELATED PRODUCTS</h4></span>
						
					</div>

					<div class="viewed_slider_container">
						<div class="owl-carousel owl-theme viewed_slider">

							@if(isset($relatedproduct))
							@foreach($relatedproduct as $relatedPro)

							<div class="owl-item grow" >


								@if(isset($relatedPro->Discount_price))
								@php
								$dis=$relatedPro->Discount_price / $relatedPro->sale_price*100;
								@endphp
								<div class="overlay p-2">
									<span>-{{ceil($dis)}} % OFF</span>
								</div>
								@endif




								<a href="{{url('product_view/'.$relatedPro->id)}}">
									<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center" >
										<div class="viewed_image" style="padding:0px; width:100%; height:auto;">
											<img src="{{url($relatedPro->product_image)}}" alt="" class="img-fluid" style="max-height:200px;  width:100%;">
										</div>
										<div class="viewed_content text-center">
											<div class="viewed_price">

												@php
												$old_price=$relatedPro->sale_price;
												$dis_price=$relatedPro->Discount_price;
												$present_price=$old_price-$dis_price;
												@endphp

												@if(isset($relatedPro->Discount_price))
												<label style="color:#000; margin:0px;"><del>{{$relatedPro->sale_price}}</del></label>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												@else
												@endif
												<lable>TK.{{$present_price}}</lable>

											</div>

											<div class="viewed_name">
												<a href="{{url('product_view/'.$relatedPro->id)}}">
													@php
													$productName=substr($relatedPro->product_name,0,20);
													@endphp
													{{$productName}} ..
												</a> 
											</div>
										</div>


										<style type="text/css">
											.overlay span{
												margin-top:-10px;
												height:27px;
												width:60px;
												background-color:#FA4F4F;
												border-radius: 0px 11px 11px 0px;
												color:#fff;
												display: inline-block;
												padding-top:4px;
												padding-left:1px;
												outline: none;
												font-size:11px;
											}
										</style>



									</div>
								</a>
							</div>

							@endforeach
							@endif


							


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="{{url('public/fontlink')}}/product_view_link/setup.js"></script>
	<script type="text/javascript" src="{{url('public/fontlink')}}/product_view_link/main.js"></script>

	<style type="text/css">
		.grow img{
			transition: 1.3s ease;
		}
		.grow img:hover{
			-webkit-transform: scale(1.05);
			-ms-transform: scale(1.05);
			transform: scale(1.05);
			transition: 1s ease;
		}
		.viewed_item
		{
			width: 85%;
			background: #FFFFFF;
			border-radius: 8px;
			padding-top: 25px;
			padding-bottom: 25px;
			padding-left: 15px;
			padding-right: 15px;
		}
	</style>


	@endsection