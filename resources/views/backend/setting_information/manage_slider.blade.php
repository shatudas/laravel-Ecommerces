@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Slider Manage</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Slider Manage</li>
		</ol>
	</div>

	<div class="container-fluid">

		<!-- state start-->
		<div class="row">
			<div class=" col-sm-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							Slider Manage
							<a href="{{url('slider_add')}}" class="btn py-2" style=" float:right; border:2px solid #4DA6FF; border-radius:0px; color:#000;">Add Slider</a>
						</div>
					</div>


					<div class="card-body" style="overflow-x:auto;">
						<table id="example" class="table table-bordered table-striped" cellspacing="0">
							<thead>
								<tr>
									<th>Show Id</th>
									<th>Title</th>
									<th>Url</th>
									<th>Admin Name</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							
						</tfoot>
						<tbody>

							@php
							$i=1;

							@endphp

							@if($slider_Info)
							@foreach($slider_Info as $sliderdata)


							<tr>
								<td>{{$i++}}</td>
								<td>{{$sliderdata->title}}</td>
								<td>{{$sliderdata->url}}</td>
								<td>{{$sliderdata->name}}<small>#{{$sliderdata->admin_id}}</small></td>
								<td>
									@if($sliderdata->slider_image)
									<img src="{{url($sliderdata->slider_image)}}" style="height:50px; width:50px; border:1px solid #ccc;"  align="center">
									@else
									No Image
									@endif
								</td>
								<td style="padding:0px;">
									<div align="center" style="padding-left:0px; padding-top:4px;">
										<a href="{{url('slider_delete/'.$sliderdata->id)}}" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="ti-trash" onclick="return confirm('Slider Delete Sure..')"></i></a>

										<a href="{{url('slider_edit/'.$sliderdata->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="icon-eye
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