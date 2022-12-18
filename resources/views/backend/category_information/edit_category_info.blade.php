@extends('backend.index')
@section('backcontent')


<main class="main-content">
	<div class="page-title pt-2">
		<h4 class="mb-0">Edit Category Information</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Edit Category Information</li>
		</ol>
	</div>


	<form method="POST" action="{{url('category_update/'.$edit->id)}}" enctype="multipart/form-data">
		@csrf
	<div class="container-fluid">
		<div class="row">
			<div class=" col-md-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							Category Information
							<a href="{{url('manage_category')}}" class="btn py-1 bx-3" style="float:right; font-size:15px; color:#fff; font-weight:400;text-transform: capitalize; background-color:#FE776A; border-radius:1px;"> View Category</a>

						</div>
					</div>
					<div class="card-body">
						<form>

							<div class="form-group">
								<label >Sl</label>
								<input type="text" name="sl" class="form-control  @error('sl') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Enter Category Sl.." value="{{$edit->sl}}">	
								@error('sl')
										<span style="color:red;">sl Is Empty</span>
									@enderror
							</div>

							<div class="form-group">
								<label >Item Name</label>
								<select name="item_id" class="form-control  @error('item_id') is-invalid @enderror"  id="exampleFormControlSelect1">
									<option value="{{$edit->item_id}}" >{{$edit->item_name}}</option>
										@php 
									 $catdata=DB::table('item_information')->get();
									@endphp
									@if(isset($catdata))
									@foreach($catdata as $viewdata)
										<option value="{{ $viewdata->id }}">{{$viewdata->item_name}}</option>
									@endforeach
									@endif
							</select>

							 @error('item_id')
										<span style="color:red;">sl Is Item</span>
									@enderror
							</div>

							<div class="form-group">
								<label >Category Name</label>
								<input type="text" name="category_name" class="form-control  @error('category_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Enter Category name.." value="{{$edit->category_name}}">
								@error('category_name')
										<span style="color:red;">sl Is Category Name</span>
									@enderror	
							</div>

							<div class="form-group">
								<label >Status</label>
								<select name="status" class="form-control  @error('status') is-invalid @enderror"  id="exampleFormControlSelect1">
									<option value="{{$edit->status}}">@if($edit->status == 1)Active @else Inactive @endif</option>
									@if($edit->status == 1)
									<option value="2">Inactive</option>
									@else
									<option value="1">Active</option>
									@endif
								</select>
								@error('status')
								<span style="color:red;">sl Is Status</span>
								@enderror	
							</div>

							<div class="form-group">
								<label>Category Image</label><br>
								<input type="file" name="category_image" id="profile-img"  aria-describedby="emailHelp" style="width:30%; float:left; clear:right;">
								@if($edit->category_image)
								<img    src="{{url($edit->category_image)}}" id="profile-img-tag" width="80px" height="80"   style="margin-left:20px; border:1px solid #DFE0E1;">
								@endif

								<input type="hidden" name="old_image" value="{{$edit->category_image}}" class="form-control" > 
							</div>

							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;" onclick="return  confirm('Data Update sure..')">Update</button>

							
							</div>

						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	</form>
</main>

@endsection