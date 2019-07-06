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

	<form action="{{ route('fullForm.store') }}" enctype="multipart/form-data" method="post">@csrf


		<div class="form-group">
			<label>Name :</label>
			<input type="text" name="name" value="{{$fullForm->name}}">
		</div>

		<div class="form-group">
	        <label for="exampleInputFile">File input</label>
	        <img src="">
	    </div>

		<div class="form-group">
	        <label for="inputDateofBirth">Date of Birth :</label>
	        <input type="date" class="form-control" id="inputDateofBirth" name="dob" style="width: 200px" value="{{$fullForm->date}}">
	    </div>

		<div class="form-group">
		   <label>Gender :</label>
		   <select name="gender">
		       <option value="">Select Gender</option>
		       <option value="Male">Male</option>
		       <option value="Female">Female</option>
		   </select>
		</div>


		<div class="checkbox">
			<label>Skills : </label>
		    <label class="checkbox-inline">
		      <input type="checkbox" id="inlineCheckbox1" name="skills[]" value="option1"> English
		    </label>
		    <label class="checkbox-inline">
		      <input type="checkbox" id="inlineCheckbox2" name="skills[]" value="option2"> Bangla
		    </label>
		    <label class="checkbox-inline">
		      <input type="checkbox" id="inlineCheckbox3" name="skills[]" value="option3"> Japanish
		    </label>
		</div>

		<div class="checkbox">
			<label>Hobby : </label>
		    <label class="checkbox-inline">
		      <input type="checkbox" id="inlineCheckbox1" name="hobby[]" value="option1"> 
		    </label>
		    
		</div>

		<fieldset class="form-group">
	    	<label for="exampleTextarea">About textarea</label>
	    	<textarea class="form-control" id="exampleTextarea" rows="3" name="bio">{{$fullForm->bio}}</textarea>
	  	</fieldset>

		<fieldset class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="arnab.das682@gmail.com">
		    <small class="text-muted">We'll never share your email with anyone else.</small>
		</fieldset>
	    <fieldset class="form-group">
	   		<label for="exampleInputPassword1">Password</label>
	    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  	</fieldset>

	  	<div class="form-group">
        	<label>Single Checkbox :</label>
		    <input type="checkbox" value="1"  id="remember_me" name="remember_me">
		    <label for="remember_me">Remember me</label>
		</div>

	  	<div class="form-group">
            <label>Is Active? </label>
            <input type="radio" name="is_active" value="1">Yes
            <input type="radio" name="is_active" value="0">No
        </div>
	   
	   <button type="submit">Submit</button>
	
	</form>

@endsection