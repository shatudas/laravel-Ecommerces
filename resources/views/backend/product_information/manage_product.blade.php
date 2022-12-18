@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Product Manage</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Product Manage</li>
		</ol>
	</div>

	<div class="container-fluid">

		<!-- state start-->
		<div class="row">
			<div class=" col-sm-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							Product Manage

							<a href="{{url('product_info')}}" class="btn py-2" style=" float:right; border:2px solid #4DA6FF; border-radius:0px; color:#000;">Add Product</a>
						</div>
					</div>


					<div class="card-body" style="overflow-x:auto;">
						<table id="example" class="table table-bordered table-striped" cellspacing="0">
							<thead>
								<tr>
									<th>Product Code</th>
									<th>Product Name</th>
									<th>Item Name</th>
									<th>Purchase Price</th>
									<th>Sale Price</th>
									<th>Dis Price</th>
									<th>Stock Status</th>
									<th>Status</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
						
							<tbody>

								@if(isset($product))
								@foreach($product as $viewpro)

								<tr>
									<td>{{$viewpro->product_code}}</td>
									<td>{{$viewpro->product_name}}</td>
									<td>{{$viewpro->item_name}}</td>
									<td>{{$viewpro->purchase_price}}</td>
									<td>{{$viewpro->sale_price}}</td>
									<td>
										@if ($viewpro->Discount_price)
										{{$viewpro->Discount_price}}
										@else
										 <span>-----</span>
										@endif
									</td>
									<td>
										@if($viewpro->stock_status==1)
										<a href="{{url('status_Available/'.$viewpro->id)}} " class="btn btn-success">Available</a>
										@else
										<a href="{{url('status_Unavailable/'.$viewpro->id)}}" class="btn btn-danger">Anavailable</a>
										@endif
				     </td>

									<td>
										@if($viewpro->status==1)
										<a href="{{url('active/'.$viewpro->id)}}" class="btn btn-success">Active</a>
										@else
										<a href="{{url('inactive/'.$viewpro->id)}}" class="btn btn-danger">Inactive</a>
										@endif
				     </td>

									<td>
										@if ($viewpro->product_image)
										<img src="{{url($viewpro->product_image)}}" style="height:50px; width:50px; border:1px solid #ccc;"  align="center">
										@else
										No image
										@endif

									</td>
									<td style="padding:0px;">
										<div align="center" style="padding-left:0px; padding-top:4px;">
											<a href="{{url('deletepro/'.$viewpro->id)}}" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;" onclick="return confirm('Product Delete Sure..')"><i class="ti-trash"></i></a>

											<a href="{{url('editpro/'.$viewpro->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="icon-eye
												"></i></a>
											</div>
										</td>
									</tr>


									@endforeach
									@endif

										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>


					<!-- state end-->

				</div>
			</main>





			@endsection