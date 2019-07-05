@extends('layoutHome.default')

@section('content')

	<table>
	   <tr>
	       <td>Name : </td>
	       <td>{{ $fullForm->name }}</td>
	   </tr>
	   <tr>
	       <td>Picture : </td>
	       <td></td>
	   </tr>
	   <tr>
	       <td>Gender : </td>
	       <td>{{ $fullForm->gender }}</td>
	   </tr>
	   <tr>
	       <td>Date Of Birth : </td>
	       <td>{{ $fullForm->date_of_birth }}</td>
	   </tr>
	   <tr>
	       <td>Hobby : </td>
	       <td>
	           <ul>
	           {{ $fullForm->hobby }}
	           </ul>
	       </td>
	   </tr>
	   <tr>
	       <td>Skills : </td>
	       <td>
	           {{ $fullForm->skills }}
	       </td>
	   </tr>
	   <tr>
	       <td>Bio data : </td>
	       <td>{!! $fullForm->bio !!}</td>
	   </tr>
	   
	   
	</table>

@endsection