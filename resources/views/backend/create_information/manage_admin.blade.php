@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Manage Admin</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Manage Admin</li>
		</ol>
	</div>

	<div class="container-fluid">

		<!-- state start-->
		<div class="row">
			<div class=" col-sm-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							Manage Admin
						</div>
					</div>


					<div class="card-body">
						<table id="bs4-table" class="table table-bordered table-striped" cellspacing="0">
							<thead>
								<tr>
									<th>Show Sl</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Address</th>
									<th>Status</th>
									<th>Admin Name</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>

							</tfoot>
							<tbody>

								@php
								$i=1;
								@endphp
								@if(isset($admin))
								@foreach($admin as $admindata)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $admindata->name }}</td>
									<td>{{ $admindata->email }}</td>
									<td>{{ $admindata->phone }}</td>
									<td>{{ $admindata->address }}</td>
									<td>
										@if ($admindata->status==1)
										<a href="{{url('activeadmin/'.$admindata->id)}} " class="btn btn-success">Active</a>
										@else
										<a href="{{url('inactiveadmin/'.$admindata->id)}}" class="btn btn-danger">Inactive</a>
										@endif
									</td>


									@php
									$chack= DB::table('users')->where('id',$admindata->admin_id)->first();
									@endphp

									<td>---{{-- {{ $chack->name}} --}}</td>


									<td>
										@if($admindata->image)
										<img src="{{url($admindata->image)}}" style="height:50px; width:50px; border:1px solid #ccc;"  align="center">
										@else
										No Image
										@endif
									</td>
									<td style="padding:0px;">
										<div align="center" style="padding-left:0px; padding-top:4px;">
											<a href="{{url('deleteadmin/'.$admindata->id)}}" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"  onclick="return confirm('Admin Delete Sure..')"><i class="ti-trash"></i></a>

											<a href="{{url('editadmin/'.$admindata->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="icon-eye
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