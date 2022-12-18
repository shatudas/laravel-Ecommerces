@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Brand Manage</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Brand Manage</li>
		</ol>
	</div>

	brand_data

	<div class="container-fluid">

		<!-- state start-->
		<div class="row">
			<div class=" col-sm-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							Brand Manage
								<a href="{{url('brand_info')}}" class="btn py-2" style=" float:right; border:2px solid #4DA6FF; border-radius:0px; color:#000;">Add Brand</a>
						</div>
					</div>


					<div class="card-body" style="overflow-x:auto;">
						<table id="example" class="table table-bordered table-striped" cellspacing="0">
							<thead>
								<tr>
									<th>Show Sl</th>
									<th>Sl</th>
									<th>Brand Name</th>
									<th>Status</th>
									<th>Admin Name</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>	
							<tbody>

								@php 
								 $i=1;
								@endphp

								@if(isset($brand_data))
								@foreach( $brand_data as $brandinfo)


								<tr>
									<td>{{$i++}}</td>
									<td>{{$brandinfo->sl}}</td>
									<td>{{$brandinfo->brand_name}}</td>
									<td>
											@if ($brandinfo->status==1)
												<a href="{{url('brandinactive/'.$brandinfo->id)}} " class="btn btn-success">Active</a>
											@else
												<a href="{{url('brandactive/'.$brandinfo->id)}}" class="btn btn-danger">Inactive</a>
											@endif
									</td>



									<td>{{$brandinfo->name}}<small>(#{{$brandinfo->admin_id}})</small></td>
									<td>

										@if($brandinfo->brand_image)
										<img src="{{($brandinfo->brand_image)}}" style="height:50px; width:50px; border:1px solid #ccc;"  align="center">
										@else
										No Image
										@endif
									</td>
									<td style="padding:0px;">
										<div align="center" style="padding-left:0px; padding-top:4px;">
											<a href="{{url('delete_brand/'.$brandinfo->id)}}" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;" onclick="return confirm('Data Delete Sure ..')"><i class="ti-trash"></i></a>

											<a href="{{url('edit_brand/'.$brandinfo->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="icon-eye
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