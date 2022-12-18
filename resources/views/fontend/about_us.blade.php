@extends('fontend.index')
@section('homecontent')


<div class="col-lg-12  col-md-12 col-12 " style="background-color:#F7F8FA;">

	<div class="row">
		<div class="col-lg-12  col-md-12 col-12 bg-white" style="border-bottom:1px solid #ccc;">
			<br>
			<span class="head_text">About Us</span>
			<br>
			<br>
		</div>
	</div>


	<div class="container py-4" >
		<div class="row">
			<div class="col-lg-12 col-md-12 col- 12 bg-white" >

				@if(isset($aboutus))
				<p>{!! $aboutus->details !!}</p>
				@endif
			</div>
		</div>
	</div>
	

</div>



<style type="text/css">

	.head_text{
		font-size:30px;
		font-weight:600;
		margin-left:50px;
		color:#5F5F5F;
	}

	.bg-white {
		border:1px solid #ccc;
		box-shadow: 0px 0px 4px 2px rgba(230,231,233,0.75);
-webkit-box-shadow: 0px 0px 4px 2px rgba(230,231,233,0.75);
-moz-box-shadow: 0px 0px 4px 2px rgba(230,231,233,0.75);
	}

</style>



@endsection