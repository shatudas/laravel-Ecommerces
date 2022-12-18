@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Category Information</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Category Information</li>
		</ol>
	</div>


	<form method="POST" action="{{url('category_insert')}}" enctype="multipart/form-data">
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

								@php
         $slgen = DB::table('category_information')->orderBy('sl','DESC')->first();
        @endphp

							<div class="form-group">
								<label >Sl</label>
								<input type="text" name="sl" class="form-control  @error('sl') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Enter Category Sl.." value="@if(isset($slgen)) {{$slgen->sl+1}}@else 1 @endif">	
								@error('sl')
										<span style="color:red;">sl Is Empty</span>
									@enderror
							</div>

							<div class="form-group"> 
								<label >Item Name</label>
								<select name="item_id" class="form-control  @error('item_id') is-invalid @enderror"  id="exampleFormControlSelect1">
									<option value="" disabled="disabled" selected="selected">Select Item</option>
									@php 
									 $catdata=DB::table('item_information')->get();
									@endphp
									@if(isset($catdata))
									@foreach($catdata as $viewdata)
									@if($viewdata->status==1)
										<option value="{{ $viewdata->id }}">{{$viewdata->item_name}}</option>
										@endif
									@endforeach
									@endif
							</select>
							 @error('item_id')
										<span style="color:red;">sl Is Item</span>
									@enderror
							</div>

							<div class="form-group">
								<label >Category Name</label>
								<input type="text" name="category_name" class="form-control  @error('category_name') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Enter Category name.." value="{{old('category_name')}}">
								@error('category_name')
										<span style="color:red;">sl Is Category Name</span>
									@enderror	
							</div>

							<div class="form-group">
								<label >Status</label>
								<select name="status" class="form-control  @error('status') is-invalid @enderror"  id="exampleFormControlSelect1">
									<option value="" disabled="disabled" selected="selected">Select Status</option>
									<option value="1">Active</option>
									<option value="2">Inactive</option>
								</select>
								@error('status')
										<span style="color:red;">sl Is Status</span>
									@enderror	
							</div>

							<div class="form-group">
								<label>Category Image</label><br>
								<input type="file" name="category_image" id="profile-img"  aria-describedby="emailHelp" style="width:30%; float:left; clear:right;">
								<img    src="#" id="profile-img-tag" width="80px" height="80"   style="margin-left:20px; border:1px solid #DFE0E1;">
							</div>

							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;">Submit</button>

								<button type="reset" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#58D68D; color:#fff; margin-left:6px;">Refresh</button>

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