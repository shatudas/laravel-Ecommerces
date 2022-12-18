@php

$setting=DB::table('setting_information')->first();
$contenttable=DB::table('contuct')->first();


@endphp





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="MHS">
	<title>Invoice Page</title>

	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	 <style type="text/css">
    @media print {
    input#btnPrint {
    display: none;
    }
    }
     </style> 

</head>
<body style="background-color:#f2f2f2;">

 <div class="container mt-3" >

  <div class="row">
   <div class=" col-sm-12" style="background-color:#f4f4f4; padding:0px;">
    <div class="card card-shadow" style="padding:0px;">
     <div class="card-body m-0 p-0">
      
      <div class="row p-0 m-0">

      	<div class="col-sm-12 p-1" style="background-color:#F7BD5D; ">
      		<div class="row">
      	  <div class="col-sm-6">
      		   <img src="{{ url($setting->setting_image) }}"  style="height:60px;">
       	   <br/>
      	  </div>
      	  <div class="col-sm-6">
      		  <h3 class="mt-2 mr-4" style="float:right; ">INVOICE</h3>
      	  </div>
      		</div>
      	</div>

       <div class="col-sm-6 mb-2">
        <span>{{ $setting->phone }}</span> <br/>
        <span>{{ $setting->email }}</span> <br/>
       </div>
       <div class="col-sm-6 text-md-right mb-2">
       	@if(isset($adddata))
        <span>Invoice # {{$adddata->id}}</span> <br/>
        <span>Date: {{$adddata->order_date}}</span>
        @endif
       </div>

      </div>

      <div class="row">

       <div class="col-sm-6 mb-3 pl-5">
        <h6>TO:</h6>
        <span>{!! $contenttable->details !!}</span> <br/>
        <span>+{{$contenttable->phone}}</span> 
       </div>

       <div class="col-sm-6 mb-3">
        <h6>FROM TO:</h6>
        @if(isset($adddata))
        <span>Name 
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :- {{$adddata->name}}</span><br/>
        <span>Phone  
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	:- {{$adddata->phone}}</span><br/>
        <span>Email
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	:- {{$adddata->email}}</span><br/>
        <span>Shiping Adddress
       
        	:- {{$adddata->address}}</span><br/>

        @endif
       </div>

       <div class="col-sm-12 mb-4 " >
        <center><strong style="text-transform:uppercase; border-bottom:2px solid #F7BD5D; padding-bottom:8px;">Product  Invoice Detalis</strong></center>
       </div>
       <div class="col-sm-12 ">
        <table class="table table-bordered table-striped " style="width:95%;" align="center">
         <thead>
          <tr>
           <th scope="col"># SL</th>
           <th scope="col">Product Name</th>
           <th scope="col">Price</th>
           <th scope="col">Quantity</th>
           <th scope="col">Size</th>
           <th scope="col">Color</th>
           <th scope="col">Total</th>
          </tr>
         </thead>
         <tbody>


         	@php
         	$i=1;
         	$total=0;
         	@endphp

         	@if(isset($data))
         	@foreach($data as $invoicedata)

         	@php
         	$total=$total+$invoicedata->total_price;
         	@endphp

          
          <tr>
          	<td>{{$i++}}</td>
          	<td>{{$invoicedata->product_name}}</td>
          	<td>{{$invoicedata->price}}</td>
          	<td align="center">{{$invoicedata->qty}}</td>
          	<td>{{$invoicedata->size}}</td>
          	<td>{{$invoicedata->color}}</td>
          	<td>{{$invoicedata->total_price}}</td>
          </tr>


          	@endforeach
			        @endif
  
    

         </tbody>
        </table>
       </div>
       <div class="col-sm-4 ml-auto">
        <table class="table table-bordered table-striped" style="width:95%; margin-left:-10px;">
         <tbody>

          <tr>
           <td>Subtotal</td>
           <td>{{$total}}</td>
          </tr>
          <tr>
           <td>Tax</td>
           <td>0.00</td>
          </tr>

          <tr>
           <td>Discount</td>
           <td>0.00</td>
          </tr>
          <tr>
           <td>
            <strong>GRAND TOTAL</strong>
           </td>
           <td><strong>{{$total}}</strong></td>
          </tr>

         </tbody>
        </table>
       </div>

       <div class="col-sm-12">
        <div class="border p-4"><Strong>Note:</Strong>
         <strong class="f12">Thanks for your business</strong>
         <div align="right">
							<input type="button" id="btnPrint" class="btn btn-outline-primary btn-sm" onclick="window.print();" value="Print" style="margin-right:-0px;" align="right">
						</div>
        </div>
       </div>

      </div>
     </div>
    </div>
   </div>
  </div>
 </div>



</body>
</html>



{{-- <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{url('public/fontlink')}}/styles/bootstrap4/bootstrap.min.css">
	<title>invoice</title>
</head>
<body>


	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Product Name</th>
				<th>price</th>
				<th>Qty</th>
				<th>size</th>
				<th>color</th>
				<th>total price</th>
			</tr>
		</thead>


		<tbody>
			@php
			$i=1;
			$total=0;
			@endphp

			@if(isset($data))
			@foreach($data as $invoicedata)

			@php
			$total=$total+$invoicedata->total_price;


			@endphp

			<tr>
				<td>{{$i++}}</td>
				<td>{{$invoicedata->product_name}}</td>
				<td>{{$invoicedata->price}}</td>
				<td>{{$invoicedata->qty}}</td>
				<td>{{$invoicedata->size}}</td>
				<td>{{$invoicedata->color}}</td>
				<td>{{$invoicedata->total_price}}</td>
			</tr>


			@endforeach
			@endif


			<tr>
				<td colspan="6">Grent Total</td>
				<td>
					{{$total}}
				</td>
			</tr>



		</tbody>


	</table>

</body>
</html> --}}