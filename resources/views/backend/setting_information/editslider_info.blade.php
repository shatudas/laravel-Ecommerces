@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Edit Slider Information</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Edit Slider Information</li>
		</ol>
	</div>
<form method="POST" action="{{url('Update_slider/'.$slideredit->id)}}" enctype="multipart/form-data">
	@csrf
	<div class="container-fluid">
		<div class="row">
			<div class=" col-md-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							Slider Information
							<a href="{{url('manage_slider')}}" class="btn py-1 bx-3" style="float:right; font-size:15px; color:#fff; font-weight:400;text-transform: capitalize; background-color:#FE776A; border-radius:1px;"> View Slider</a>
						</div>
					</div>
					<div class="card-body">
							<div class="form-group">
								<label>Title</label>
								<input type="text" name="title" class="form-control  @error('title') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Enter slider title.." value="{{$slideredit->title}}">	

								@error('title')
										<span style="color:red;">Title Is Empty</span>
									@enderror
							</div>

							<div class="form-group">
								<label >Url</label>
								<input type="text" name="url" class="form-control  @error('url') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="url//......" value="{{$slideredit->url}}">	

								@error('url')
										<span style="color:red;">Url Is Empty</span>
									@enderror
							</div>

							
							<div class="form-group">
								<label>slider Image</label><br>
								<input type="file" name="slider_image" id="profile-img"  aria-describedby="emailHelp" style="width:30%; float:left; clear:right;">
								@if($slideredit->slider_image)
								<img    src="{{url($slideredit->slider_image)}}" id="profile-img-tag" width="80px" height="80"   style="margin-left:20px; border:1px solid #DFE0E1;">
								@endif
								<input type="hidden" name="old_image" value="{{$slideredit->slider_image}}">


								
							</div>

							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;" onclick="return confirm('Slider Info update Sure..')">Update</button

							</div>

						
					</div>

				</div>
			</div>
		</div>
	</div>
	</form>


</main>
@endsection