@extends('layoutHome.default')

@section('content')

	@if ($errors->any())
	   <div class="alert alert-danger">
	       <ul>
	           @foreach ($errors->all() as $error)
	               <li>{{ $error }}</li>
	           @endforeach
	       </ul>
	   </div>
	@endif

	<a href="form/create" class="btn btn-outline-info">Add New</a>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
			<th>Name</th>
			<th>Photo</th>
			<th>Date of Birth</th>
			<th>Gender</th>
			<th>Skills</th>
			<th>Hobby</th>
			<th>About</th>
			<th>Action</th>
		</tr>
        @php
        $sl = 0;
        @endphp
    @foreach($fullForms as $fullForm)
      <tr>
          <td>{{++$sl}}</td>
          <td><a href="{{asset('fullForm').'/'.$fullForm->id}}">{{$fullForm['name']}}</a></td>
          <td>{{$fullForm['picture']}}</td>
          <td>{{$fullForm['date_of_birth']}}</td>
          <td>{{$fullForm['gender']}}</td>
          <td>{{$fullForm['skills']}}</td>
          <td>{{$fullForm['hobby']}}</td>
          <td>{{$fullForm['bio']}}</td>
          <td><a href="{{asset('fullForm').'/'.$fullForm->id}}/edit">Edit</a> | Delete</td>
      </tr>
 	@endforeach
    </table>



@endsection