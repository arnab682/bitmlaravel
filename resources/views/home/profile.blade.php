@extends('layoutHome.default')

@section('content')
   profile
   

   <h1>Table Data</h1>

   
   <button type="button" class="btn btn-outline-success"><a href="/profile/create">Add New</a></button>

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
			<td><a href="/profile/details/{{$profile['id']}}">
				{{$profile['firstname']}} {{$profile['lastname']}}</a></td>
			<td><a href="/profile/lol/{{$profile['id']}}">{{$profile['gender']}}</a></td>
			<td>{{$profile['zipcode']}}</td>
			<td><a href="/profile/edit/{{$profile['id']}}">Edit</a> | 
				<a href="">Delete</a></td>
		</tr>

		@endforeach
	</table>
@endsection

@section('sidebar')
    n/a
@endsection

