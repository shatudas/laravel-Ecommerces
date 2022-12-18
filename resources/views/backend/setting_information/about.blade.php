@extends('backend.index')
@section('backcontent')

<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">About Information</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">About Information</li>
		</ol>
	</div>
	<form method="post" action="{{url('update_about/'.$about->id)}}" enctype="multipart/form-data">
		@csrf
		<div class="container-fluid">
			<div class="row">
				<div class=" col-md-12">
					<div class="card card-shadow mb-4">
						<div class="card-header">
							<div class="card-title">
								About Information
							</div>
						</div>
						<div class="card-body">

							<div class="form-group">
								<label>Detalis</label>
								<textarea type="text" name="details" id="aboutsummernote" class="form-control  @error('details') is-invalid @enderror">{!!$about->details!!}</textarea>
								@error('details')
								<span style="color:red;">etalis Is Empty</span>
								@enderror	
							</div>
							
							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;" onclick="return confirm('about Us updata..')">Update</button>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</form>


</main>







@endsection