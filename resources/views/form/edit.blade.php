@extends('layout.default')

@section('content')

	<div class="content">
		<form action="form/24" method="PUT" enctype="multipart/form-data">@csrf

			<div class="form-group">
					<label>Name :</label>
					<input type="text" name="name" value="{{$form->name}}" />
			</div>
			<button type="Submit" class="btn btn-outline-info">Submit</button>
		</form>
	</div>

@endsection