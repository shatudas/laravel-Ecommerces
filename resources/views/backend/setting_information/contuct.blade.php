@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Contuct Information</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Contuct Information</li>
		</ol>
	</div>


	<form method="POST" enctype="multipart/form-data" action="{{url('update_contuct/'.$contuct->id)}}">
		@csrf
		<div class="container-fluid">
			<div class="row">
				<div class=" col-md-12">
					<div class="card card-shadow mb-4">
						<div class="card-header">
							<div class="card-title">
								Contuct Information
							</div>
						</div>
						<div class="card-body">

							<div class="form-group">
								<label >Phone Number</label>
								<input type="number" name="phone" class="form-control" value="{{$contuct->phone}}"  aria-describedby="emailHelp" >
							</div>

							<div class="form-group">
								<label >Email</label>
								<input type="email" name="email" class="form-control" value="{{$contuct->email}}"  aria-describedby="emailHelp">
							</div>


							<div class="form-group">
								<label >locaction Url</label>
								<textarea type="text" name="location" id="summernote" class="form-control">
									{!!$contuct->location!!}
								</textarea>
							</div>
							
							<div class="form-group">
								<label>Address</label>

								<textarea type="text" name="details" rows="5" class="form-control">
									{!!$contuct->details!!}
								</textarea>
							</div>

							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;" onclick="return confirm('Contuct Us update Sure..')">Update</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	</form>


</main>

@endsection