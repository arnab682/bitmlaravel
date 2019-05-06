@extends('layoutHome.default')

@section('content')
   profile
   

   <h1>Table Data</h1>

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
			<td>Edit | Delete</td>
		</tr>

		@endforeach
	</table>
@endsection


