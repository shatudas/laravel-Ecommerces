@extends('fontend.index')
@section('homecontent')

<div class="col-sm-12 col-12 mt-4">
	<div class="container border " style="margin-top:30px;">
		<div>
			<ul class="uk-breadcrumb" style="display: flex; flex-wrap: wrap; padding: 0; margin-top:20px;margin-bottom:20px; list-style: none;">
				<li><a href="index.html">Home</a></li>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;
				<li><span style="color:gray">FAQ</span></li>
			</ul>
		</div>
		<span class="detailspage">
			<div id="accordion">

				@if(isset($FAQdata))
				@foreach($FAQdata as $faqview)

				<div class="card p-4">

					<div class="card-header" id="headingOne1">
						<h5 class="mb-0">
							<button class="btn btn-link d-flex align-items-center justify-content-between collapsed" data-toggle="collapse" data-target="#{{$faqview->id}}" aria-expanded="false" aria-controls="collapseOne1" style="width:100%;">
								{{$faqview->question}}
								<span class="fa-stack fa-sm" >
									<i class="fa fa-plus" ></i>
								</span>
							</button>
						</h5>
					</div>
					
					<div id="{{$faqview->id}}" class="collapse" aria-labelledby="headingOne1" data-parent="#accordion">
						<div class="card-body">
						{!! $faqview->detalis !!}

						</div>
					</div>
				</div>

				@endforeach
				@endif

						</div>
					</div>
				</div>


<style type="text/css">
	.card
	{
		margin-top:10px;
	}
	.card-header
	{
		border-bottom:0px;
		border-radius:0px;

	}

	.card-header  button{
		color: #5D5A5A;
		text-decoration:none;
	}

	.card-header  button:hover{
		color:gray;
		text-decoration:none;
	}





</style>

@endsection