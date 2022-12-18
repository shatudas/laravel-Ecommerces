@extends('backend.index')
@section('backcontent')

<main class="main-content">
	<div class="col-md-12 p-4 userdashboard bg-white">

		<strong>All Orders</strong><br><br>
		<div class="table-responsive">

			<table id="example" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Order</th>
						<th>Order Date</th>
						<th>Phone</th>
						<th>Payment</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>

					@if(isset($adddata))
					@foreach($adddata as $OrderData)
					<tr>

						<td title="view invoice" ><a href="{{url('invoice/'.$OrderData->id)}}" class="text-dark font-weight-bold" target="_blabk">{{$OrderData->id}}</a></td>
						<td >{{$OrderData->order_date}}</td>
						<td>{{$OrderData->phone}}</td>
						<td>{{$OrderData->prement_method}}</td>
						<td>
							@if($OrderData->status==0)
							<span class="orderstatus ">Panding</span>
							@elseif($OrderData->status==1)
							<span class="orderstatus ">Processing</span>
							@elseif($OrderData->status==2)
							<span class="orderstatus">Shiping</span>
							@elseif($OrderData->status==3)
							<span class="orderstatus">Completd</span>
							@endif
						</td>

						<td>
							<form method="POST" action="{{url('update/'.$OrderData->id)}}">
								@csrf
								<select name="status" class="form-control w-75" style="float:left; clear:right;">
									<option value="0">Panding</option>
									<option value="1">Processing</option>
									<option value="2">Shiping</option>
									<option value="3">Completd</option>
								</select>
								<button type="submit" style="float:right; border:0px; color:#FF5500; padding-top:5px;">
									<i class="fa fa-edit"></i>
								</button>
							</form>
						</td>
					</tr>

					@endforeach
					@endif

				</tbody>
			</table>

		</div>

	</div>
</main>
@endsection