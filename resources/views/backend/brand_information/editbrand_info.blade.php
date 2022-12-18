@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Edit Brand Information</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Edit Brand Information</li>
		</ol>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class=" col-md-12">
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							Brand Information
							<a href="{{url('manage_brand')}}" class="btn py-1 bx-3" style="float:right; font-size:15px; color:#fff; font-weight:400;text-transform: capitalize; background-color:#FE776A; border-radius:1px;"> View Brand</a>

						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{url('update_brand/'.$edit->id)}}" enctype="multipart/form-data">
							@csrf 

							<div class="form-group">

								@php
								$slgen = DB::table('brand_information')->orderBy('sl','DESC')->first();
								@endphp

								<label >Sl</label>
								<input type="text" name="sl" class="form-control  @error('sl') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Enter Brand Sl.." value="{{$edit->sl}}">	
								@error('sl')
								<span style="color:red;">sl Is Empty</span>
								@enderror
							</div>

							<div class="form-group">
								<label >Brand Name</label>
								<input type="text" name="brand_name" class="form-control  @error('brand_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Enter Brand Name" value="{{$edit->brand_name}}" >	
								@error('brand_name')
								<span style="color:red;">Brand Is Empty</span>
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
								<span style="color:red;">status Is Empty</span>
								@enderror
							</div>

							<div class="form-group">
								<label>Brand Image</label><br>
								<input type="file" name="brand_image" id="profile-img"  aria-describedby="emailHelp" style="width:30%; float:left; clear:right;">
								@if($edit->brand_image)
								<img    src="{{url($edit->brand_image)}}" id="profile-img-tag" width="80px" height="80"   style="margin-left:20px; border:1px solid #DFE0E1;">
								@endif
								<input type="hidden" name="old_image" value="{{$edit->brand_image}}" class="form-control">
							</div>

							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;" onclick="return confirm('Data Update update..)">Update</button>

								{{-- <button type="reset" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#58D68D; color:#fff; margin-left:6px;">Refresh</button> --}}

							</div>

						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


</main>

@endsection