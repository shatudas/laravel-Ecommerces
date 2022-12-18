@extends('fontend.index')
@section('homecontent')

<div class="col-md-12 pt-3 pb-2 bg-white" style="margin-top:30px;">
</div>

<div class="col-sm-12 col-12 mt-4 mb-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-1 col-md-12 col-sm-12 col-12 p-0 ">
			</div>

			<div class="col-lg-10 col-md-12 col-sm-12 col-12">
				<div class="col-sm-12 col-12 pa">
					<div class="row"  id="showdata">
						@if(isset($product_cat))
						@foreach($product_cat as $subprodate)
						<div class="col-lg-3 cl-md-4 col-sm-6 col-6 mt-4">
							@if(isset($subprodate->Discount_price))
							@php
							$dis=$subprodate->Discount_price / $subprodate->sale_price*100;
							@endphp

							<div class="overlay p-2">
								<span>-{{ceil($dis)}}% OFF</span>
							</div>

							@endif

							<div class="homeproducts border">
								<center>
									<a href="{{url('product_view/'.$subprodate->id)}}"><img src="{{url($subprodate->product_image)}}" class="img-fluid" style=""></a>
								</center>
								<div>
									<a href="{{url('product_view/'.$subprodate->id)}}">
										<center>
											@php
											$productName=substr($subprodate->product_name,0,20);
											@endphp
											{{$productName}}..<br>

											@php
											$old_price=$subprodate->sale_price;
											$dis_price=$subprodate->Discount_price;
											$present_price=$old_price-$dis_price;
											@endphp

											@if(isset($subprodate->Discount_price))
											<del>{{$subprodate->sale_price}}</del><br/>
											@else	<br/>
											@endif
											<span>TK.{{$present_price}}</span>
										</center>
									</a>
								</div>
							</div>
						</div>

						@endforeach
						@endif

							{{-- 		<div class="mt-4 col-md-9">
								{{ $product_cat ->links() }}
							</div> --}}


						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>



<style type="text/css">
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
		max-height:120px;	
		min-height:210px;	
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


	.list-group-item-action
	{
		border:0px;
		background-color:#2B373D;
		color:#fff;
		padding-top:8px;
		padding-bottom:8px;
		font-size:13px;
		font-weight:300;
	}

	.list-group-item-action:hover
	{
		background-color:#6F777B;
		color:#F1F1EC;
	}


	.bg-light {
		background-color: #e5e5e5!important;
	}

	.viewproducts{
		color:red;
		padding: 10px 15px;
		border-radius: 0px;
		border:1px solid red;
	}

	.viewproducts:hover{
		text-decoration: none;
		color:red;
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
