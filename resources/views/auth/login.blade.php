@extends('layouts.app')

@section('content')

{{-- <script type="text/javascript"> 
 function Function() {
  var x = document.getElementById("password");
  if (x.type === "password") {
   x.type = "text";
  } else {
   x.type = "password";
  }
 }
</script> --}}



<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-6">
   <div class="card  main_div">
    <div class="card-header" style="border-radius:0px;"><span>Admin </span> Login</div>

    <div class="card-body">
     <form method="POST" action="{{ route('login') }}">
      @csrf
      
      <div class="form-group row">
       <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>
       <div class="col-md-6">
        <input id="email" type="email" style="box-shadow:none;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <div class="form-group row" style="padding-top:20px;">
       <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
       <div class="col-md-6">
        <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password" value="" style="box-shadow:none; float:left; clear:right;">
        <i class="far fa-eye" id="togglePassword" style="cursor: pointer;margin-top:12px;"></i>
        @error('password')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
        @enderror
       </div>
      </div>

      <div class="form-group row mb-0">
       <div class="col-md-12" align="center">

        <div class="form-group">
         @if (Route::has('password.request'))
        <a class="btn" href="{{ route('password.request') }}">
         Forgot Your Password?
        </a>
        @endif
        </div>
        <div class="form-group">
         <button type="submit" class="btn" id="btn">
        Login
        </button>
        </div>


        
        
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>







<style type="text/css">
 body{
  background-color:#010E1A; 
 }
 .container{
  margin-top:80px;
 }

 .main_div
 {
  border:0px;
 }

 .card-header
 {
  text-align:center;
  font-size:28px;
  font-weight:600;
  padding-top:5px;
  padding-bottom:10px;
  background-color:#FA8918;
  border:0px;
  color:#283747;
  font-family:FreeMono, monospace;

 }

 .card-header span
 {
  color:#fff;
 }

 .card-body{
  background-color:#fff;
 }

 .form-group
 {
  margin-top:10px;
 }
 .form-control
 {
  box-shadow:0px;
  border-radius:0px; 
  width:100%;
  border:1px solid #000;
 }

 #btn{
  width:130px;
  border-radius:0px;
  background-color:#48C9B0;
 }


 form i {
  margin-left: -30px;
  cursor: pointer;
 }


</style>


<script type="text/javascript">
 const togglePassword = document.querySelector("#togglePassword");
 const password = document.querySelector("#password");

 togglePassword.addEventListener("click", function () {

  // toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);
  // toggle the eye icon
  this.classList.toggle('fa-eye');
  this.classList.toggle('fa-eye-slash');
 });
</script>



@endsection
