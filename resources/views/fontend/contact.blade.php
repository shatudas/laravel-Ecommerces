@extends('fontend.index')
@section('homecontent')

<div class="contact_info">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

					<!-- Contact Item -->
					<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
						<div class="contact_info_image">
							<i class="fa fa-mobile-phone" style="color:#FF8500;  font-size:35px;"></i>
						</div>
						<div class="contact_info_content">
							<div class="contact_info_title">Phone</div>
							<div class="contact_info_text">{{$contenttable->phone}}</div>
						</div>
					</div>

					<!-- Contact Item -->
					<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							 
						<div class="contact_info_image"><i class="fa fa-envelope"  style="color:#FF8500;  font-size:30px;"></i></div>
						<div class="contact_info_content">
							<div class="contact_info_title">Email</div>
							<div class="contact_info_text">{{$contenttable->email}}</div>
						</div>
					</div>

					<!-- Contact Item -->
					<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
						<div class="contact_info_image">
							<i class="fa fa-map-marker"  style="color:#FF8500;  font-size:35px;"></i>
						</div>
						<div class="contact_info_content">
							<div class="contact_info_title">Address</div>
							<div class="contact_info_text">{!!$contenttable->details!!}</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Contact Form -->

<div class="contact_form">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="contact_form_container">
					

					<form method="POST" action="{{url('sent_massage')}}"{{--  id="contact_form" --}}>
						@csrf

						{{-- <input type="text" name="user_name">
						<button type="submit" >btn</button> --}}



						<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">

							<input type="text" name="user_name" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required." value="{{old('user_name')}}" >

							<input type="text" name="email" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required." value="{{old('email')}}" >

							<input type="text" name="phone" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number" value="{{old('phone')}}" >

						</div>
						<div class="contact_form_text">

							<textarea name="message" id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message.">
								{{old('message')}}
							</textarea>
							
						</div>

						<div class="contact_form_button">
							<button type="submit" class="button contact_submit_button" style="background-color:#FF8500;">Send Message</button>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
	<div class="panel"></div>
</div>


<style type="text/css">



	
/*********************************
4. Contact
*********************************/

.contact_info
{
	width: 100%;
	padding-top: 70px;
}
.contact_info_item
{
	width:100%;
	margin:10px;
	height: 100px;
	border: solid 1px #e8e8e8;
	box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
	padding-left: 32px;
	padding-right: 15px;
}
.contact_info_image
{
	width: 35px;
	height: 35px;
	text-align: center;
}
.contact_info_image img
{
	max-width: 100%;
}
.contact_info_content
{
	padding-left: 17px;
}
.contact_info_title
{
	font-weight: 500;
}
.contact_info_text
{
	font-size: 12px;
	color: rgba(0,0,0,0.5);
}

/*********************************
4.1 Contact Form
*********************************/

.contact_form
{
	padding-top: 85px;
}
.contact_form_container
{

}
.contact_form_title
{
	font-size: 30px;
	font-weight: 500;
	margin-bottom: 37px;
}
.contact_form_inputs
{
	margin-bottom: 30px;
}
.input_field
{
	width:100%;
	margin:5px;
	height: 50px;
	padding-left: 25px;
	border: solid 1px #e5e5e5;
	border-radius: 5px;
	outline: none;
	color: #0e8ce4;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.input_field:focus,
.text_field:focus
{
	border-color: #b2b2b2;
}
.input_field:hover,
.text_field:hover
{
	border-color: #b2b2b2;
}
.input_field::-webkit-input-placeholder,
.text_field::-webkit-input-placeholder
{
	font-size: 16px;
	font-weight: 400;
	color: rgba(0,0,0,0.3);
}
.input_field:-moz-placeholder,
.text_field:-moz-placeholder
{
	font-size: 16px;
	font-weight: 400;
	color: rgba(0,0,0,0.3);
}
.input_field::-moz-placeholder,
.text_field::-moz-placeholder
{
	font-size: 16px;
	font-weight: 400;
	color: rgba(0,0,0,0.3);
} 
.input_field:-ms-input-placeholder,
.text_field:-ms-input-placeholder
{ 
	font-size: 16px;
	font-weight: 400;
	color: rgba(0,0,0,0.3);
}
.input_field::input-placeholder,
.text_field::input-placeholder
{
	font-size: 16px;
	font-weight: 400;
	color: rgba(0,0,0,0.3);
}
.text_field
{
	width: 100%;
	height: 160px;
	padding-left: 25px;
	padding-top: 15px;
	border: solid 1px #e5e5e5;
	border-radius: 5px;
	color: #0e8ce4;
	outline: none;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.contact_submit_button
{
	padding-left: 35px;
	padding-right: 35px;
	color: #FFFFFF;
	font-size: 18px;
	border: none;
	outline: none;
	cursor: pointer;
	margin-top: 24px;
}
.panel
{
	width: 100%;
	height: 50px;
	background: #fafafa;
	margin-top: 120px;
}

/*********************************
4.2 Contact Map
*********************************/

.contact_map
{
	width: 100%;
}
.google_map
{
	width: 100%;
	height: 400px;
}
.map_container
{
	width: 100%;
	height: 100%;
	overflow: hidden;
}
#map
{
	width: 100%;
	height: calc(100% + 30px);
}


	
</style>
@endsection