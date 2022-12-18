@extends('fontend.index')
@section('homecontent')

<!-------slider info--------->
<div class="container-fluid " style="padding:0px;">
	<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="padding:0px; margin:0px;">

		<ol class="carousel-indicators">
			<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
			@if(isset($slidermore))
			@for($i=1; $i<=count($slidermore); $i++)
			<li data-target="#carousel-example-2" class="aaa" data-slide-to="{{ $i }}"></li>
			@endfor
			@endif
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="view">
					<a href="">
						<img class="d-block w-100" src="{{url($slideractive->slider_image)}}"
						alt="First slide">
					</a>
					<div class="mask rgba-black-light"></div>
				</div>
				<div class="carousel-caption">
				</div>
			</div>

			@if(isset($slidermore))
			@foreach($slidermore as $sliderinfo)
			
			<div class="carousel-item">
				<div class="view">
					<img class="d-block w-100"  src="{{url($sliderinfo->slider_image)}}"
					alt="Second slide">
					<div class="mask rgba-black-strong"></div>
				</div>
				<div class="carousel-caption">
				</div>
			</div>

			@endforeach
			@endif

		</div>
	</div>
</div>


{{-- <img src="{{url('public')}}/46banner.gif"> --}}
{{-- <iframe src="{{'publib'}}/46banner.gif" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/FGNtFy2C75nwGZPOjw">via GIPHY</a></p> --}}
<!-- Free Delivery div -->



<!------show category---------->
<div class="col-sm-12 col-12 pt-3 pb-5" style="background-color:#f3f3f3;">

	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-sm-8 col-12 text-md-left text-center" style="padding-top:5px">
				<span class="headingsection">Shop by Category's</span>
			</div>
			<div class="col-sm-4 col-12 text-md-right text-center subsearch mt-sm-0 mt-2">
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="col-sm-12 col-12">
			<div class="row">

				@if (isset($showbycategory))
				@foreach($showbycategory as $catna)

				@php
				$varpro=DB::table('product_information')->where('item_id',$catna->id)->get();
				@endphp

				<div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0" >
					<div class="col-sm-12 col-12 collections bg-white " style="border: 1px solid #F8F9FA;">
						<div class="bg-white grow py-1" style=" padding:0px; margin:0px;" >
							<center>
								<a href="{{url('itemProduct/'.$catna->id)}}">
									<img src="{{$catna->item_image}}" class="img-fluid" style="max-height:120px; width:90%; margin-bottom:4px; margin-top:4px;"><br>
									<span style="color:#414141;">{{$catna->item_name}}</span><br>
									<span style="color:#808080; line-height: ">{{ count($varpro) }} product</span>
								</a>
							</center>
						</div>
					</div>
				</div>

				@endforeach
				@endif

			</div>
		</div>
	</div>
</div>


@if(isset($itemname))
@foreach($itemname as $item_show)

@php
$products = DB::table('product_information')->where('item_id',$item_show->id)->first();
@endphp

@if(isset($products))


<div class="col-sm-12 col-12 bg-light pb-5">
	<div class="container-fluid" style="padding-top:8px;">
		
		<div class="row">
			<div class="col-sm-8 col-12 text-md-left text-center" >
				<span class="headingsection">{{$item_show->item_name}}</span>
			</div>
			<div class="col-sm-4 col-12 text-md-right text-center subsearch mt-sm-0 mt-2" style=" padding-top:4px;">
				<a href="{{url('itemProduct/'.$item_show->id)}}" class="viewproducts" style="margin-top:40px;">View All</a>
			</div>
		</div>

		<div class="col-sm-12 col-12 p-0">
			<div class="row" id="showproduct-130">

				@php
				$productIndfo=DB::table('product_information')->orderBy('id','DESC')->where('item_id',$item_show->id)->limit(6)->get();
				@endphp

				<!-------product page--------->
				@if(isset($productIndfo))
				@foreach($productIndfo as $productShow)
				@if($item_show->id==$productShow->item_id)


				<div class="col-lg-2 cl-md-4 col-sm-6 col-6 mt-4">
					@if(isset($productShow->Discount_price))
					@php
					$dis=$productShow->Discount_price / $productShow->sale_price*100;
					@endphp

					<div class="overlay p-2">
						<span>-{{ceil($dis)}} % OFF</span>
					</div>

					@endif

					<div class="homeproducts">
						<center>
							<a href="{{url('product_view/'.$productShow->id)}}">
								<img src="{{url($productShow->product_image)}}"
								class="img-fluid">
							</a>
						</center>
						<div class="text-center">
							@php
							$productName=substr($productShow->product_name,0,20);
							@endphp
							<a href="{{url('product_view/'.$productShow->id)}}">
								{{$productName}}..<br>

								@php
								$old_price=$productShow->sale_price;
								$dis_price=$productShow->Discount_price;
								$present_price=$old_price-$dis_price;
								@endphp

								@if(isset($productShow->Discount_price))
								<del>{{$productShow->sale_price}}</del>
								<br/>
								@else

								<br/>
								@endif

								<span>TK.{{$present_price}}</span>
							</a>
						</div>
					</div>
				</div>

				@endif
				@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

@else
@endif

@endforeach
@endif

<!-- Brands -->

<style type="text/css">
	.headingsection {
		font-weight: 600;
		text-transform: uppercase;
		font-family: 'Titillium web';
	}

	* {
		padding: 0;
		margin: 0;
	}
</style>




<!-----brand  show-------->
<div class="col-sm-12 col-12 pb-5 bg-light">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-sm-8 col-12 text-md-left text-center" style="padding-top:16px">
				<span class="headingsection">Shop By Brands</span>
			</div>
			<div class="col-sm-4 col-12 text-md-right text-center subsearch mt-sm-0 mt-2">

			</div>
		</div>
	</div>
	<div class="container-fluid mb-4">
		<div class="col-sm-12 col-12">
			<div class="row" style="background:#f4f4f4">


				@if (isset($brandinfo))
				@foreach($brandinfo as $brandname)

				<div class="p-2 col-lg-2 col-md-3 col-sm-4 col-6" style="background:#fff; border: 3px #f4f4f4  solid;align:center; ">
					<center style="padding:3px;">
						<a href="{{url('brand/'.$brandname->id)}}"><img src="{{ url($brandname->brand_image)  }}" class="img-fluid" alt="{{$brandname->brand_name}}" style="max-height:60px;"></a>
					</center>
					<center><small style="text-transform:uppercase;">{{$brandname->brand_name}}</small></center>
				</div>

				@endforeach
				@endif

				<div class="p-2 col-lg-2 col-md-3 col-sm-4 col-6" style="background:#fff; border: 3px #f4f4f4  solid;align:center; ">
					<a href="h#" style="text-decoration:none">
						<center style="padding:3px;">
							<button class="btn btn-danger">View&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="characteristics">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 col-md-6 char_col">
				<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="{{url('public/fontlink')}}/images/char_1.png" alt=""></div>
					<div class="char_content">
						<div class="char_title">Free Delivery</div>
						<div class="char_subtitle">from $50</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 char_col">
				<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="{{url('public/fontlink')}}/images/char_2.png" alt=""></div>
					<div class="char_content">
						<div class="char_title">Free Delivery</div>
						<div class="char_subtitle">from $50</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 char_col">
				<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="{{url('public/fontlink')}}/images/char_3.png" alt=""></div>
					<div class="char_content">
						<div class="char_title">Free Delivery</div>
						<div class="char_subtitle">from $50</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 char_col">
				<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="{{url('public/fontlink')}}/images/char_4.png" alt=""></div>
					<div class="char_content">
						<div class="char_title">Free Delivery</div>
						<div class="char_subtitle">from $50</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





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

	.headingsection{
		font-weight: 600;
		text-transform: uppercase;
		font-family: 'Titillium web';
	}

	.headingsection:after {
		content: "";
		width: 103px;
		border-top: 1px solid rgba(0,0,0,.1);
		position: absolute;
		bottom: -6px;
		left: 15px;
		z-index: 10;
		border-top-color: #000;
		border-top-width: 3px;
	}

	.homeproducts{
		background-color: #fff;
		padding: 10px;
		border-radius: 5px;
		box-shadow: rgba(0, 0, 0, 0.05) 0px 2px 5px 0px;
	}

	.homeproducts img{
		transform: scale(0.90);
		transition: 0.6s;
	}

	.homeproducts img:hover{
		transform: scale(0.95);

	}

	.homeproducts img{
		max-height:190px;	
		min-height:185px;	
	}


	.homeproducts a{
		color: #000;
		font-size: 13px;  
		line-height: 20px;
	}
	.homeproducts a:hover{
		text-decoration: none;
		color: #000;
	}

	.homeproducts del{
		color: gray;
		font-size: 12px;
		color:#FF4600;
	}


	.homeproducts span{
		color: #000;
		font-weight: bold;
	}


	.overlay {
		position: absolute;
		transition: .5s;
		left: -20;
		top:-5;
		right: 0;
		z-index:100;

	}


	.bg-light {
		background-color: #e5e5e5!important;
	}

	.viewproducts{
		color:#fff;
		padding: 10px 15px;
		border-radius:2px;
	/*	border:1px solid red;*/
		background-color:#3EA3E9;
	}

	.viewproducts:hover{
		text-decoration: none;


	}

	.homeproducts:hover
	{
		box-shadow: 0px 0px 5px 2px rgba(112,109,109,0.79);
		-webkit-box-shadow: 0px 0px 5px 2px rgba(112,109,109,0.79);
		-moz-box-shadow: 0px 0px 5px 2px rgba(112,109,109,0.79);
		transition: box-shadow 0.5s ease-in-out;
	}
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

@endsection