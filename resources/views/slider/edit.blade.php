@extends('layoutHome.default')

@section('content')

	<div class="content">
		<form action="{{route('slider.update', $slider->id)}}" method="PUT" enctype="multipart/form-data">@csrf

			<div class="form-group">
				<label>Image :</label>
				<input type="file" name="imageUpload">
			</div>

			<div class="form-group">
					<label>Title :</label>
					<input type="text" name="name" value="{{$slider->title}}" />
			</div>

			<div class="form-group">
				<label>Description :</label>
				<textarea name="description" rows="1" cols="20">{{$slider->description}}</textarea>
			</div>

			<button type="Submit" class="btn btn-outline-info">Submit</button>
		</form>
	</div>

@endsection