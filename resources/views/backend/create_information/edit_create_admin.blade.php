@extends('backend.index')
@section('backcontent')


<main class="main-content">
	<!--page title start-->
	<div class="page-title pt-2">
		<h4 class="mb-0">Create Admin</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Create Admin</li>
		</ol>
	</div>
	<!--page title end-->
	<form method="POST" action="{{url('update_admin/'.$edit->id)}}" enctype="multipart/form-data">
		@csrf
		<div class="container-fluid">
			<div class="row">
				<div class=" col-md-12">
					<div class="card card-shadow mb-4">
						<div class="card-header">
							<div class="card-title">
								Create Admin

								<a href="{{url('manage_admin')}}" class="btn py-1 bx-3" style="float:right; font-size:15px; color:#fff; font-weight:400;text-transform: capitalize; background-color:#FE776A; border-radius:1px;"> View Admin</a>

							</div>
						</div>
						<div class="card-body">

							<div class="form-group">
								<label >Name</label>
								<input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name" value="{{$edit->name}}">	
							</div>

							<div class="form-group">
								<label >Email</label>
								<input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="example@gmail.com" value="{{$edit->email}}" disabled>
							</div>

							<div class="form-group">
								<label >Phone</label>
								<input type="number" name="phone" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Phone Number" value="{{$edit->phone}}" >
							</div>

							<div class="form-group">
								<label >Address</label>
								<input type="text" name="address" class="form-control"  aria-describedby="emailHelp" placeholder="Address"  value="{{$edit->address}}">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control"  onkeyup='check();' id="passChack"  aria-describedby="emailHelp" placeholder="Enter Password" value="">
								<small>	<input type="checkbox" class="ml-3" onclick="Function()">
									<i style="color:#95A5A6;">Show Password</i></small>
								</div>

								<div class="form-group">
									<label >Status</label>
									<select name="status" class="form-control"  id="exampleFormControlSelect1">
										<option value="{{$edit->status}}">@if($edit->status == 1)Active @else Inactive @endif</option>
										@if($edit->status == 1)
										<option value="2">Inactive</option>
										@else
										<option value="1">Active</option>
										@endif
									</select>
								</div>

								<div class="form-group">
									<label>Image</label><br>
									<input type="file" name="image" id="profile-img"  aria-describedby="emailHelp" style="width:30%; float:left; clear:right;">
									@if($edit->image)
									<img src="{{url($edit->image)}}" id="profile-img-tag" width="80px" height="80"   style="margin-left:20px; border:1px solid #DFE0E1;">
									@endif
									<input type="hidden" name="old_image" value="{{$edit->image}}">
								</div>

								<div class="form-group mt-4">
									<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;" onclick="return confirm('Admin data update Sure...')">Update</button>
								</div>

							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

	</main>


	<script>
		function onChange() {
			const password = document.querySelector('input[name=password]');
			const confirm = document.querySelector('input[name=confirm]');
			if (confirm.value === password.value) {
				confirm.setCustomValidity('');
			} else {
				confirm.setCustomValidity('Passwords do not match');
			}
		}
	</script>



	@endsection