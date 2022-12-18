	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View all Category</title>
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

						<thead>
							<tr>
								<td colspan="2" style="border:0px;">
									<img src="{{url($logo->setting_image)}}" class="img-fluid" style="width:100px; margin-left:8%;" align="center">
								</td>
								<td colspan="5" class="" style="border:0px; padding-left:15%;">
									<h3>View All Category Information</h3>
								</td>
							</tr>

							<tr class="text-center">
								<th>Category ID</th>
								<th>Sl</th>
								<th>Item Name</th>
								<th>Category Name</th>
								<th>Status</th>
								<th>Item Image </th>
								<th>user Name </th>
							</tr>
						</thead>
						<tbody>


							@if(isset($allcat))
							@foreach($allcat as $cat_data)

							<tr>
								<td>{{ $cat_data->id }}</td>
								<td>{{ $cat_data->sl }}</td>
								<td>{{ $cat_data->item_name }}</td>
								<td>{{ $cat_data->category_name }}</td>

								<td align="center">
									@if($cat_data->status==1)
									Active
									@else
									Inactive
									@endif
								</td>
								<td  align="center">
									<img src="{{url($cat_data->category_image)}}" class="img-fluid" style="width:80px;" >
								</td>
								<td>{{ $cat_data->name}}(#{{$cat_data->admin_id}})</td>
							</tr>

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