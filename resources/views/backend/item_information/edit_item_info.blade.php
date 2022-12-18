@extends('backend.index')
@section('backcontent')

<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Edit Item Information</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Edit Item Information</li>
		</ol>
	</div>

<form method="POST" action="{{url('item_update/'.$edit->id)}}" enctype="multipart/form-data">
	@csrf
	<div class="container-fluid">
		<div class="row">
			<div class=" col-md-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							Edit Item Information
							<a href="{{url('manage_item')}}" class="btn py-1 bx-3" style="float:right; font-size:15px; color:#fff; font-weight:400;text-transform: capitalize; background-color:#FE776A; border-radius:1px;"> View Item</a>

						</div>
					</div>
					<div class="card-body">

							<div class="form-group">
								<label >Sl</label>
								<input type="text" name="sl" class="form-control" value="{{$edit->sl}}"  aria-describedby="emailHelp" placeholder="Enter Item Sl..">	
							</div>

							<div class="form-group">
								<label >Item Name</label>
								<input type="text" name="item_name" class="form-control" value="{{$edit->item_name}}"  aria-describedby="emailHelp" placeholder="Enter Item Name">	
							</div>

							<div class="form-group">
								<label >Status</label>
								<select class="form-control" name="status" id="exampleFormControlSelect1">
									<option  value="{{$edit->status}}">
										@if($edit->status==1) Active
										@else Inactive
										@endif
									</option>
									@if($edit->status==2)
									<option value="2">Inactive</option>
									
									@else
									<option value="1">Active</option>
									@endif
								</select>
							</div>

							<div class="form-group">
								<label>Item Image</label><br>
								<input type="file" name="item_image" id="profile-img"  aria-describedby="emailHelp" style="width:30%; float:left; clear:right;">

								@if(isset($edit->item_image))
								<img src="{{url($edit->item_image)}}" id="profile-img-tag" width="80px" height="80"   style="margin-left:20px; border:1px solid #DFE0E1;">
								@endif
								<input type="hidden" name="old_image" class="form-control" value="{{$edit->item_image}}"  aria-describedby="emailHelp" >	
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


</main>








@endsection