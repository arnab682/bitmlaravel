@extends('layoutHome.default')

@section('content')

<a href="{{route('slider.create')}}" class="btn btn-outline-info">Add New</a>
    <table class="table table-bordered">
          <tr>
            <th>No.</th>
      			<th>Title</th>
      			<th>Desciption</th>
      			<th>Photo</th>
      			<th>Action</th>
      		</tr>
        @php
        $sl = 0;
        @endphp
  
    @foreach($sliders as $slider)
      <tr>
          <td>{{++$sl}}</td>
          <td><a href="{{route('slider.show', $slider->id)}}">{{$slider->title}}</a></td>
          <td>{{$slider->desciption}}</td>
          <td></td>
          <td><a href="{{route('slider.edit', $slider->id)}}">Edit</a> | 
              <form action="{{route('slider.destroy', $slider->id)}}"  method="post">
                @csrf @method('delete')
                <button type="submit" class="btn btn-outline-info">X</button>
              </form>
			
		      </td>
      </tr>
    @endforeach

    </table>

		

@endsection