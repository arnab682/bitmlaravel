@extends('layoutHome.default')

@section('content')

	<h2>Create Form :</h1>
	<br>
	<form>
	  <div class="form-group">
	    <label for="">First Name</label>
	    <input type="" class="form-control" id="" placeholder="First Name">
	  </div>

	  <div class="form-group">
	    <label for="">Last Name</label>
	    <input type="" class="form-control" id="" placeholder="Last Name">
	  </div>

	  <div class="form-group">
	    <label for="">Gender</label>
	    <input type="" class="form-control" id="" placeholder="Gender">
	  </div>

	  <div class="form-group">
	    <label for="">Zip Code</label>
	    <input type="" class="form-control" id="" placeholder="Zip Code">
	  </div>

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection