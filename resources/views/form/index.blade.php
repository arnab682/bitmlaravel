@extends('layout.default')

@section('content')

<a href="form/create" class="btn btn-outline-info">Add New</a>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Photo</th>
			<th>Action</th>
		</tr>
        @php
        $sl = 0;
        @endphp
    @foreach($forms as $form)
      <tr>
          <td>{{++$sl}}</td>
          <td><a href="form/{{$form->id}}">{{$form['name']}}</a></td>
          <td>{{$form['email']}}</td>
          <td>{{$form['phone']}}</td>
          <td>{{$form['photo']}}</td>
          <td><a href="form/{{$form->id}}/edit">Edit</a> | 
          	<form action="/form/15" method="DELETE">@csrf
          		<button type="submit">X</button>
          	</form></td>
      </tr>
 	@endforeach
    </table>

		

@endsection