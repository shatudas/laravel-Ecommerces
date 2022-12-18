<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View all product</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style type="text/css">
    @media print {
    input#btnPrint {
    display: none;
    }
    }
  </style> 

</head>
<body style="background-color:#D7D7D7;">

	<div class="container-fluid">

		<div class="row">
			<div class=" col-sm-12">
				<div class="card-body" style="overflow-x:auto; width: 100%; margin-top: -25px;">
					<table id="bs4-table" class="table table-bordered table-striped mt-2 bg-white" cellspacing="0" style="font-size: 13px;">

						<thead >
							<tr >
								<td colspan="12" class="text-center">
									<h3>View All Product</h3>
								</td>
							</tr>

							<tr>
								<th>Code</th>
								<th>Product Name</th>
								<th>Item Name</th>
								<th>Category </th>
								<th>Subcategory </th>
								<th>Brand </th>
								<th>Purchase Price</th>
								<th>Sale Price</th>
								<th>Discount Price</th>
								<th>Stock Status</th>
								<th> Status</th>
								<th>Picture</th>
							</tr>
						</thead>
						<tbody>

							@if(isset($product))
							@foreach($product as $viewdata)

							<tr>
								<td>{{ $viewdata->product_code }}</td>
								<td>{{ $viewdata->product_name }}</td>
								<td>{{ $viewdata->item_name }}</td>
								<td>{{ $viewdata->category_name }}</td>
								<td>
									@if($viewdata->subcategory_name)
										{{ $viewdata->subcategory_name }}
										@else
									<center><small>Nall</small></center>
									@endif
								</td>
								<td>
									@if($viewdata->brand_name)
									{{$viewdata->brand_name}}
									@else
									<center><small>Null</small></center>
									@endif
								</td>
								<td>{{ $viewdata->purchase_price}}</td>
								<td>{{ $viewdata->sale_price}}</td>
								<td>
									@if($viewdata->Discount_price)
									{{ $viewdata->Discount_price }}
									@else
									<center><small>----</small></center>
									@endif
								</td>
								<td>
									@if($viewdata->stock_status == 1)
									Stock Available
									@else
									Out of Stock
									@endif
								</td>
								<td>
									@if($viewdata->status == 1)
									Active
									@else
									Inactive
									@endif
									
								</td>
								<td>
									@if(isset($viewdata->product_image))
									<img src="{{url($viewdata->product_image)}}" class="zoom" style="max-height: 40px;">
									@else
									No Image
									@endif
								</td>
								@endforeach
								@endif

							</tbody>
						</table>
						<div align="right">
							<input type="button" id="btnPrint" class="btn btn-outline-primary btn-sm" onclick="window.print();" value="Print" style="margin-right:-0px;" align="right">
						</div>
			
						
								
						
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- state end-->

</div>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>