@extends('backend.index')
@section('backcontent')

<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Manage User Admin</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Manage User Admin</li>
		</ol>
	</div>

	<div class="container-fluid">
		<!-- state start-->
		<div class="row">
			<div class=" col-sm-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
						Manage User Admin
						</div>
					</div>

					<div class="card-body" style="overflow-x:auto;">
						<table id="example" class="display nowrap table table-bordered table-striped" cellspacing="0" style="width: 100%;">

							<thead>
								<tr><th>Show Sl</th>
									<th>Sl</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Address</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								@php
         $i=1;
								@endphp

								@if(isset($user_admin))
								@foreach($user_admin as $viewdata)

								<tr>
									<td>{{$i++}}</td>
									<td>{{$viewdata->id}}</td>
									<td>{{$viewdata->name}}</td>
									<td>{{$viewdata->email}}</td>
									<td>{{$viewdata->phone}}</small></td>
									<td>{{$viewdata->address}}</small></td>
									<td align="center">
										@if(isset($viewdata->image))
										<img src="{{$viewdata->image}}" style="height:50px; width:50px; border:1px solid #ccc;"  align="center">
										@else
										<img src="{{'public/fontlink/images'}}/1024px-No_image_available.png" style="height:50px; width:50px; "align="center">
										@endif
									</td>

								
									<td style="padding:0px;">
										<div align="center" style="padding-left:0px; padding-top:4px;">
											<a href="{{url('user_acc_del/'.$viewdata->id)}}" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;" onclick="return confirm('delete data sure..')"><i class="ti-trash"></i></a>

											<a href="{{url('user_acc_edit/'.$viewdata->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="icon-eye
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
		</div>



	</main>





	@endsection