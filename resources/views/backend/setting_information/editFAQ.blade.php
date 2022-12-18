@extends('backend.index')
@section('backcontent')


<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Edit FAQ</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Edit FAQ</li>
		</ol>
	</div>
<form method="post" action="{{url('update_FAQ/'.$edit->id)}}" enctype="multipart/form-data">
	@csrf
	<div class="container-fluid" >
		<div class="row">
			<div class=" col-md-12" >
				<div class="card card-shadow mb-4">
					<div class="card-header">
						<div class="card-title">
							FAQ
							<a href="{{url('manage_faq')}}" class="btn py-1 bx-3" style="float:right; font-size:15px; color:#fff; font-weight:400;text-transform: capitalize; background-color:#FE776A; border-radius:1px;"> View FAQ</a>
						</div>
					</div>
					<div class="card-body">
						

								<div class="form-group">
								<label>Question</label>
								<input type="text" name="question" class="form-control @error('question') is-invalid @enderror"  aria-describedby="emailHelp" placeholder="Enter question"value="{{$edit->question}}">
								 @error('question')
										<span style="color:red;">question Is Empty</span>
									@enderror	
							</div>

							<div class="form-group">
								<label>Detalis  <small>(answer)</small></label>

								<textarea type="text" name="detalis" id="aboutsummernote" class="form-control @error('detalis') is-invalid @enderror">
									{!!$edit->detalis!!}</textarea>
								{{-- <input type="text" name="detalis" id="aboutsummernote" class="form-control @error('detalis') is-invalid @enderror"  aria-describedby="emailHelp" value="{{old('detalis')}}"> --}}
								@error('detalis')
										<span style="color:red;">detalis Is Empty</span>
									@enderror		
							</div>

							
							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;" onclick="return confirm('Data Update Sure..')">update</button>
							</div>

						
					</div>

				</div>
			</div>
		</div>
	</div>

	</form>


</main>

@endsection