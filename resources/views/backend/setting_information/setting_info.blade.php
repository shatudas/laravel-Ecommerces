@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Setting Information</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Setting Information</li>
		</ol>
	</div>

	<form method="post"  enctype="multipart/form-data" action="{{url('update_setting/'.$setting->id)}}">
		@csrf
		<div class="container-fluid">
			<div class="row">
				<div class=" col-md-12">
					<div class="card card-shadow mb-4">
						<div class="card-header">
							<div class="card-title">
								Setting Information
							</div>
						</div>
						<div class="card-body">


							<div class="form-group">
								<label>Title</label>
								<input type="text" name="title" class="form-control"  aria-describedby="emailHelp" placeholder="Enter setting title.." value="{{$setting->title}}">	
							</div>

							<div class="form-group">
								<label >Email</label>
								<input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="example@gmail.com" value="{{$setting->email}}">	
							</div>

							<div class="form-group">
								<label>Phone</label>
								<input type="number" name="phone" class="form-control"  aria-describedby="emailHelp" placeholder="Enter  Phone Number.." value="{{$setting->phone}}">	
							</div>

							<div class="form-group">
								<label>Facebook</label>
								<input type="text" name="facebook" class="form-control"  aria-describedby="emailHelp" placeholder="Enter facebook link.." value="{{$setting->facebook}}">	
							</div>

							<div class="form-group">
								<label>Twitter</label>
								<input type="text" name="twitter" class="form-control"  aria-describedby="emailHelp" placeholder="Enter twitter link.." value="{{$setting->twitter}}">	
							</div>

							<div class="form-group">
								<label>Instagram</label>
								<input type="text" name="instagram" class="form-control"  aria-describedby="emailHelp" placeholder="Enter instagram link.." value="{{$setting->instagram}}">	
							</div>

							<div class="form-group">
								<label>Youtube</label>
								<input type="text" name="youtube" class="form-control"  aria-describedby="emailHelp" placeholder="Enter youtube link.." value="{{$setting->youtube}}" >	
							</div>


							<div class="form-group">
								<label>Favicon</label><br>
								<input type="file" name="favicon"  aria-describedby="emailHelp"  style="width:30%; float:left; clear:right;">

								@if($setting->favicon)
								<img src="{{url($setting->favicon)}}" id="profile-img-tag" width="80px" height="80"   style="margin-left:20px; border:1px solid #DFE0E1;">
								@endif	
								{{-- <input type="hidden" name="old_fav" value="{{$setting->favicon}}"> --}}
							</div>
							
							<div class="form-group">
								<label>Image</label><br>
								<input type="file" name="setting_image" id="profile-img"  aria-describedby="emailHelp" style="width:30%; float:left; clear:right;">
								@if($setting->setting_image)
								<img src="{{url($setting->setting_image)}}" id="profile-img-tag" width="80px" height="80"   style="margin-left:20px; border:1px solid #DFE0E1;">
								@endif
							</div>

							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;" onclick="return confirm('Setting Update Sure..')">Update</button>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</form>


</main>







@endsection