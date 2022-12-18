@extends('backend.index')
@section('backcontent')



<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Edit Customer Information</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Edit Customer</li>
		</ol>
	</div>

	<form method="POST" action="{{url('Customer_update/'.$edit->id)}}" enctype="multipart/form-data">
		@csrf
		<div class="container-fluid">
			<div class="row">
				<div class=" col-md-12">
					<div class="card card-shadow mb-4">
						<div class="card-header">
							<div class="card-title">
								Edit Item Information
								<a href="{{url('User_Info')}}" class="btn py-1 bx-3" style="float:right; font-size:15px; color:#fff; font-weight:400;text-transform: capitalize; background-color:#FE776A; border-radius:1px;"> View Customer Info</a>

							</div>
						</div>
						<div class="card-body">

							<div class="form-group">
								
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" value="{{$edit->name}}"  aria-describedby="emailHelp" placeholder="Enter Item Name">	
								</div>

								<div class="form-group">
									<label> Email</label>
									<input type="email" name="email" class="form-control" value="{{$edit->email}}"  aria-describedby="emailHelp" placeholder="Enter Item Name">	
								</div>

								<div class="form-group">
									<label>Phone</label>
									<input type="text" name="phone" class="form-control" value="{{$edit->phone}}"  aria-describedby="emailHelp" placeholder="Enter Item Name">	
								</div>

								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" class="form-control" value="{{$edit->address}}"  aria-describedby="emailHelp" placeholder="Enter Item Name">	
								</div>


								<div class="form-group">
									<label>password</label>
									<input type="password" name="password" class="form-control" min="8"  id="passChack"   aria-describedby="emailHelp" >
									<small>
										<input type="checkbox" class="ml-3" onclick="Function()">
										<i style="color:#95A5A6;">Show Password</i>
									</small>	
								</div>

								<div class="form-group">
									<label>Image</label><br>
									<input type="file" name="image" id="profile-img"  aria-describedby="emailHelp" style="width:30%; float:left; clear:right;">

									@if(isset($edit->image))
									<img src="{{url($edit->image)}}" id="profile-img-tag" width="80px" height="80"   style="margin-left:20px; border:1px solid #DFE0E1;">
									@endif
									<input type="hidden" name="old_image" class="form-control" value="{{$edit->image}}"  aria-describedby="emailHelp" >	
								</div>

								<div class="form-group mt-4">
									<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;"  onclick="return confirm('Data Update Sure ....')">Update</button>



								</div>


							</div>

						</div>
					</div>
				</div>
			</div>
		</form>



		<script type="text/javascript"> 
			function Function() {
				var x = document.getElementById("passChack");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
		</script>


	</main>







	@endsection