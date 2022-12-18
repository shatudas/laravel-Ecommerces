@extends('backend.index')
@section('backcontent')

<main class="main-content">

	<div class="page-title pt-2">
		<h4 class="mb-0">Repaly Customer Message</h4>
		<ol class="breadcrumb mb-0 pl-2 pb-0 pt-0">
			<li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
			<li class="breadcrumb-item active">Repaly Customer Message</li>
		</ol>
	</div>

<form method="POST" action="{{url('message_update/'.$edit->id)}}" enctype="multipart/form-data">
	@csrf
	<div class="container-fluid">
		<div class="row">
			<div class=" col-md-12">
				<div class="card card-shadow mb-4">
					
					<div class="card-header">
						<div class="card-title">
							Repaly Customer Message
							<a href="{{url('Message')}}" class="btn py-1 bx-3" style="float:right; font-size:15px; color:#fff; font-weight:400;text-transform: capitalize; background-color:#FE776A; border-radius:1px;">View</a>
						</div>
					</div>

					<div class="card-body">
							<div class="form-group">
								<label >ID</label>
								<input type="text" name="id" class="form-control" value="{{$edit->id}}"  aria-describedby="emailHelp" placeholder="Enter Item Sl.." disabled="">	
							</div>

							<div class="form-group">
								<label >Name</label>
								<input type="text" name="user_name" class="form-control" value="{{$edit->user_name}}"  aria-describedby="emailHelp" placeholder="Enter Item Name" disabled="">	
							</div>

							<div class="form-group">
								<label >Email</label>
								<input type="text" name="email" class="form-control" value="{{$edit->email}}"  aria-describedby="emailHelp" placeholder="Enter Item Name" disabled="">	


								<input type="hidden" name="email" class="form-control" value="{{$edit->email}}"  aria-describedby="emailHelp" placeholder="Enter Item Name">	
							</div>

							<div class="form-group">
								<label >Phone</label>
								<input type="text" name="phone" class="form-control" value="{{$edit->phone}}"  aria-describedby="emailHelp" placeholder="Enter Item Name" disabled="">	
							</div>

							<div class="form-group">
								<label >Message</label>
								<textarea type="text" name="message" class="form-control" rows="2" disabled="">{{$edit->message}}</textarea>
							</div>

								<div class="form-group">
								<label >Replay Message</label>
								<textarea type="text" name="replay_meassage" class="form-control" rows="4"></textarea>
							</div>

							<div class="form-group mt-4">
								<button type="submit" class="btn" style="border-radius:1px; padding-left:30px; padding-right:30px; background-color:#3498DB; color:#fff;"  onclick="return confirm('Data Update Sure ....')">Update</button>
							</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	</form>


</main>








@endsection