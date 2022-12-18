@extends('backend.index')
@section('backcontent')

<main class="main-content">
	<div class="page-title pt-2">
		<h4 class="mb-0">How To Bay</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">How To Bay</li>
		</ol>
	</div>
	<form method="post" action="{{url('update_how/'.$howTobay->id)}}">
		@csrf
		<div class="container-fluid">
			<div class="row">
				<div class=" col-md-12">
					<div class="card card-shadow mb-4">
						<div class="card-header">
							<div class="card-title">
								How To Bay
							</div>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Detalis</label>
								<textarea  type="text" name="details" id="aboutsummernote" class="form-control" >
									{!!$howTobay->details!!}
								</textarea>	
							</div>
							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;"  onclick="return confirm('how To bay updata..')">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

@endsection