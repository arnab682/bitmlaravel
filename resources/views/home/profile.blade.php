@extends('layoutHome.default')

@section('content')
   profile
   

   <h1>Table Data</h1>

   
   <button type="button" class="btn btn-outline-success"><a href="profile/create">Add New</a></button>

   <table class="table table-bordered" style="text-align: center;">
		<tr>
	        <th>Sl.</th>
	        <th>Full Name</th>
	        <th>Gender</th>
	        <th>Zip Code</th>
	        <th>Action</th>
	    </tr>
		@php
			$j=0;
		@endphp

		@foreach($profiles as $profile)
		<tr>
			<td>{{++$j}}</td>
			<td><a href="profile/details/{{$profile['id']}}">
				{{$profile['firstname']}} {{$profile['lastname']}}</a></td>
			<td><a href="profile/lol/{{$profile['id']}}">{{$profile['gender']}}</a></td>
			<td>{{$profile['zipcode']}}</td>
			<td><a href= "{{route('profile.edit',$profile->id)}}">Edit</a> | 
                    {!!Form::open(['action' => ['HomeController@destroy', $profile->id], 'method' => 'POST', 'class' => ''])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => ''])}}
                    {!!Form::close()!!}
                </td>
		</tr>

		@endforeach
	</table>

	<div class="">
		{{ $profiles->links()}}
	</div>


@endsection

@section('sidebar')
    n/a
@endsection

