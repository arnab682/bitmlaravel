@extends('layoutHome.default')

@section('content')

	<div class="content">
		<form action="/form" method="post" enctype="multipart/form-data">@csrf

			<div class="form-group">
				<table class="table table-bordered">
					
			        @php
			        $sl = 0;
			        @endphp

			         <dl>
			            <dt>ID</dt>
			            <dd>{{++$sl}}</dd>

			            <dt>Title</dt>
			            <dd>{{$slider->title}}</dd>

			            <dt>Desciption</dt>
			            <dd>{{$slider->description}}</dd>

			            <dt>Photo</dt>
			            <dd>{{$slider->photo}}</dd>

			            <dt>Action</dt>
			            <dd>
			            	<a href="{{route('slider.edit', $slider->id)}}">Edit</a> | 
							<form action="" method="DELETE">@csrf
          						<button type="submit">X</button>
          					</form>
			            </dd>
			        </dl>
				</table>
			</div>

		</form>
	</div>

@endsection