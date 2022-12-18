@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Manage FAQ</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Manage FAQ</li>
		</ol>
	</div>

	<div class="container-fluid">

		<!-- state start-->
		<div class="row">
			<div class=" col-sm-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							Manage FAQ
							<a href="{{url('faq')}}" class="btn py-2" style=" float:right; border:2px solid #4DA6FF; border-radius:0px; color:#000;">Add FAQ</a>
						</div>
					</div>

					<div class="card-body">
						<table id="example" class="table table-bordered table-striped" cellspacing="0">
							<thead>
								<tr>
									<th>Show Sl</th>
									<th>question</th>
									<th>Detalis</th>
									<th>Admin Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@php
									$i=1;
								@endphp
								@if($FAQ_data)
								@foreach($FAQ_data as $FAQdata)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$FAQdata->question}}</td>
									<td>{!!$FAQdata->detalis!!}</td>
									<td>{{$FAQdata->name}}<small>#{{$FAQdata->admin_id}}</small></td>
									<td style="padding:0px;">
										<div align="center" style="padding-left:0px; padding-top:4px;">
											<a href="{{url('deleteFAQ/'.$FAQdata->id)}}" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;" onclick="return confirm('Data Delete Sure..')"><i class="ti-trash"></i></a>
											<a href="{{url('editFAQ/'.$FAQdata->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="icon-eye
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