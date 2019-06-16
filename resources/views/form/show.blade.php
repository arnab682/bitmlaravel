@extends('layout.default')

@section('content')

	<div class="content">
		<form action="/form" method="post" enctype="multipart/form-data">@csrf

			<div class="form-group">
				<table class="table table-bordered">
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Photo</th>
						<th>Action</th>
					</tr>

					<tr>
						<td>01</td>
						<td>{{$form->name}}</td>
						<td>{{$form->email}}</td>
						<td>{{$form->phone}}</td>
						<td>{{$form->Photo}}</td>
						<td>Edit | Delete</td>
					</tr>
				</table>
			</div>

		</form>
	</div>

@endsection