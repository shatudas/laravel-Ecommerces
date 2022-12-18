@extends('fontend.index')
@section('homecontent')


<div class="col-md-12 pt-3 pb-2 bg-white" style="margin-top:30px;">
	<div class="container-fluid">
		<div>
			<ul class="uk-breadcrumb" style="display: flex; flex-wrap: wrap;list-style: none;">
				<li><a href="{{url('/')}}">Home</a></li>&nbsp;&nbsp;&nbsp; <i style="margin-top:3px;">|</i> &nbsp;&nbsp;&nbsp;
				<li><span style="color:gray">Chack Out</span></li>
			</ul>
		</div>
	</div>
</div>

<div class="col-sm-12 col-12 mt-4">
	<div class="container-fluid">

		<div class="row" style="color: #585858;">
			<div class="col-lg-5 col-md-12 col-sm-12 col-12">

				<div>
					<ul class="list-group">
						<li class="list-group-item adhead  text-light maincard" style="border-radius: 0px;">
							<span>01.</span>&nbsp;&nbsp;&nbsp;&nbsp;Shipping Address
						</li>
					</ul>
					<form method="POST" action="{{url('shiping_data/'. Auth()->user()->id )}}" style="background-color:">
						@csrf
						<li class="list-group-item border-top-0">
							<div class="row">

								<div class="form-group col-sm-12">
									<label><b>Name</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="name" placeholder="First Name" required="" value="{{ Auth()->user()->name }}" style="width:100%;">
								</div>

								<div class="form-group col-12">
									<label><b>Mobile</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="phone" placeholder="Mobile" required="" value="{{ Auth()->user()->phone }}"  disabled="">
								</div>

								<div class="form-group col-12">
									<label><b>Email</b> <span class="text-danger">*</span></label>
									<input type="email" class="form-control textfill" name="email" required="" value="{{ Auth()->user()->email }}">
								</div>

								<div class="form-group col-6">
									<label><b>District</b> <span class="text-danger">*</span></label>
									<select class="form-control textfill w-100"  name="district" required="">
										<option value="Dhaka">Dhaka</option>
										<option value="Chandpur">Chandpur</option>
										<option value="Feni">Feni</option>
									</select>
								</div>

								<div class="form-group col-6">
									<label><b>Thana</b> <span class="text-danger">*</span></label>
									<select class="form-control textfill w-100"  name="thana" required="">

										<option value="Kalabagan">Kalabagan</option>
										<option value="Badda">Badda</option>
										<option value="Cantonment">Cantonment</option>
										<option value="Gulshan">Gulshan</option>
										<option value="Wari">Wari</option>


										<option value="Sadar Sadar">Sadar</option>
										<option value="Mtalab south">Mtalab South</option>
										<option value="Kachua">Kachua</option>
										<option value="Hajiganj">Hajiganj</option>
										<option value="Mtalab north">Mtalab North</option>


										<option value="Feni Sadar">Feni Sadar</option>
										<option value="Sonagazi">Sonagazi</option>
										<option value="Daganbhuiya">Daganbhuiya</option>
										<option value="Parashuram">Parashuram</option>
										<option value="phosoram">phosoram</option>
									
									</select>
								</div>

								<div class="form-group col-12">
									<label><b>Delivery Area</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="address" placeholder="Address" required="" value="{{ Auth()->user()->address }}">
								</div>




								{{-- <div class="form-group col-12">
									<label><b>Country</b> <span class="text-danger">*</span></label>
									<select name="country" id="billing_country_id" class="form-control textfill" title="Country"  required="">
										<option value="">--Please Select Country--</option>
										<option value="BD" selected="selected">Bangladesh</option>
									</select>
								</div> --}}

								

								


								<div class="form-group col-12">
									<label><b>Premant </b> <span class="text-danger">*</span></label>
									<select class="form-control textfill w-100"  name="prement_method" required="">
										<option value="Cash On Delivery">Cash On Delivery</option>
										<option value="Bkash">Bkash</option>
										<option value="Rocket">Rocket</option>
										<option value="Nagad">Nagad</option>
									</select>
								</div>


								<div class="">
								<input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">
								I've read and accept the
								<a href="" target="_blank" style="color:red;text-decoration:none">
									terms and conditions
								</a><br><br>
								<input type="submit" name="submit" id="submit" class="bag" style="">
							</div>



								
							</div>
						</li>
						</form>

					</div><br>
				</div>


				<div class="col-lg-7 col-md-12 col-sm-12 col-12">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12  p-0">
						<div>
							<ul class="list-group">
								<li class="list-group-item adhead text-light maincard" style="border-radius: 0px;">
									<span>02.</span>&nbsp;&nbsp;&nbsp;&nbsp;Order Preview
								</li>
							</ul>

							<li class="list-group-item border-top-0">
								<div class="table-responsive">
									<table class="table" style="font-size: 13px;">
										<thead>
											<tr class="text-center">
												<th>Product</th>
												<th>Product Name</th>
												<th>Quantity</th>
												<th>Per Price</th>
												<th>Par Discount</th>
												<th>Subtotal</th>
												<th>Remove</th>
											</tr>
										</thead>
										<tbody id="placeordershow">

											@php
											$card=Cart::content();
											@endphp


											@if(isset($card))
											@foreach($card as $carddata)

											<tr class="text-center">
												<td>
													<a href="{{$carddata->options->product_image}}">
														<img src="{{$carddata->options->product_image}}" style="height:50px; width:50px;">
													</a>
												</td>
												<td>
													{{$carddata->name}} <input type="checkbox" name="shipping_id[]" id="shipping_id"  checked="" disabled="">
												</td>
												<td style="width:150px;">
													<form method="POST" action="{{url('pro_update/'.$carddata->rowId)}}">
														@csrf
													<input type="number" value="{{$carddata->qty}}" min="{{$carddata->qty}}" name="qty" id="Quantity" style="float:left; clear:right; margin:0px;">
													<button  type="submit" style="border:0px; font-size:22px; background-color:#fff; color:#FF5500;">
														<i class="fa fa-edit"></i>
													</button>
													</form>
												</td>
													<td>{{$carddata->options->sale_price}}</td>
													
													@php
													$sele=$carddata->options->sale_price;
													$dis=$carddata->price;
													$per=$sele-$dis;

													$qty=$carddata->qty;
													$total_discount=$per*$qty;
													@endphp

													<td>{{$per}} {{-- {{$carddata->price}} --}} </td>

													@php
													$productprice=$carddata->price;
													$qty=$carddata->qty;
													$product_T_price=$productprice*$qty;
													@endphp

													<td>{{ $product_T_price }}</td>

													<td>
														<a>
															<span uk-icon="icon: trash; ratio: 0.8" class="text-danger uk-icon" onclick="delete_product('10331')">
																<svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="trash">
																	<polyline fill="none" stroke="#000" points="6.5 3 6.5 1.5 13.5 1.5 13.5 3"></polyline>
																	<polyline fill="none" stroke="#000" points="4.5 4 4.5 18.5 15.5 18.5 15.5 4"></polyline>
																	<rect x="8" y="7" width="1" height="9"></rect>
																	<rect x="11" y="7" width="1" height="9"></rect>
																	<rect x="2" y="3" width="16" height="1"></rect>
																</svg>
															</span>
														</a>
													</td>
												</tr>

												@endforeach
												@endif

												<tr class="text-right">
													<td colspan="5">SubTotal</td>
													<td>
														<input type="hidden" name="subamount" id="subamount" value="" required="">
														Tk.{{Cart::subtotal()}}
													</td>
													<td></td>
												</tr>

												<tr class="text-right">
													
													<td colspan="5">Delivery Charge</td>
													<td>
														<input type="hidden" name="deliverycharge" id="deliverycharge" value="0">
														Tk.<span id="ddcharge">0</span>.00
													</td>
													<td></td>
												</tr>

												<tr class="text-right">
													<td colspan="5">Discount</td>
													<td>
														<input type="hidden" name="discount" id="discount" value="0">
														<input type="hidden" name="super_code" id="super_code">
														Tk.<span id="promo_price">0.00</span>
													</td>
													<td></td>
												</tr>

												<tr class="text-right">
													<td colspan="5">Grand Total</td>
													<td>
														<input type="hidden" name="totalamount" id="totalamount" value="388.8" required="">
														Tk.<span id="gtotal">{{Cart::subtotal()}}</span>
													</td>
													<td></td>
												</tr>

											</tbody>
										</table>
									</div>
								</li>
							</div><br>

				{{-- 			<div class="">
								<input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">
								I've read and accept the
								<a href="" target="_blank" style="color:red;text-decoration:none">
									terms and conditions
								</a><br><br>
								<input type="submit" name="submit" id="submit" class="bag" style="">
							</div>
 --}}
						</div>
					</div>
				</div>

		</div>
	</div>



	<style type="text/css">

		.bag{
			border:none;
			border-radius:0px;
		}

		.maincard{
			background-color:#FF8500;
			text-transform:uppercase;
		}

		#Quantity{
			width: 60px;
			border: none;
			border: 1px solid #DEE2E6;
			padding: 7px;
		}
	</style>

	@endsection