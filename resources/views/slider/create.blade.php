@extends('layoutHome.default')

@section('content')

<div class="content">
	<form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">@csrf
		<div class="form-group">
				<label>Image :</label>
				<input type="file" name="imageUpload">
		</div>

		<div class="form-group">
				<label>Title :</label>
				<input type="text" name="title">
		</div>


		<div class="form-group">
				<label>Description :</label>
				<textarea name="description" rows="1" cols="20" placeholder="Your Address..."></textarea>
		</div>

		<div class="form-group">
			<input type = "submit" name = "submit" value = "Submit" />
         	<input type = "reset" name = "reset"  value = "Reset" />
		</div>

	</form>
</div>

@endsection