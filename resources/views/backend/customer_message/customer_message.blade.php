@extends('backend.index')
@section('backcontent')

<main class="main-content">
	<div class="col-md-12 p-4 userdashboard bg-white">

		<strong>Customer Message</strong><br><br>
		<div class="table-responsive">

			<table id="example" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Message</th>
						<th>Replay Message</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>

					@if(isset($massagedata))
					@foreach($massagedata as $OrderData)
					
					<tr>
						<td>{{$OrderData->id}}</td>
						<td>{{$OrderData->user_name}}</td>
						<td>{{$OrderData->email}}</td>
						<td>{{$OrderData->phone}}</td>
						<td>{{$OrderData->message}}</td>
						<td>
							@if($OrderData->replay_meassage==!null)
							<a href="#" style="color:blue;">Replay Message Sent</a>
							@else
							<center>	----</center>
							@endif
						</td>
						<td>
							<a href="{{url('delMess/'.$OrderData->id)}}" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;" onclick="return confirm('delete data sure..')"><i class="ti-trash"></i></a>
							<a href="{{url('editMess/'.$OrderData->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="icon-eye"></i></a>
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