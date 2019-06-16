@extends('layoutHome.default')

@section('content')

	<h2>Create Form :</h2>
	<br>
	{!! Form::open(array('url' => 'profile/store','method' => 'post')) !!}

		  

		  <div class="form-group">
		  	{{ Form::label("First Name :", null, ['class' => 'control-label']) }}
		    
		    {{Form::text("firstname", 
	             old("firstname") ? old("firstname") : (!empty($user) ? $user->firstname : null),
	             [
	                "class" => "form-control",
	                "placeholder" => "First Name",
	             ])
			}}
		    
		  </div>

		  <div class="form-group">
		  	{{ Form::label("Last Name :", null, ['class' => 'control-label']) }}
		    
		    {{Form::text("lastname", 
	             old("lastname") ? old("lastname") : (!empty($user) ? $user->lastname : null),
	             [
	                "class" => "form-control",
	                "placeholder" => "Last Name",
	             ])
			}}
		    
		  </div>

		  <div class="form-group">
		  	{{ Form::label("Gender :", null, ['class' => 'control-label']) }}
		    
		    {{Form::text("gender", 
	             old("gender") ? old("gender") : (!empty($user) ? $user->gender : null),
	             [
	                "class" => "form-control",
	                "placeholder" => "Gender",
	             ])
			}}
		    
		  </div>

		  <div class="form-group">
		  	{{ Form::label("Zip Code :", null, ['class' => 'control-label']) }}
		    
		    {{Form::text("zipcode", 
	             old("zipcode") ? old("zipcode") : (!empty($user) ? $user->zipcode : null),
	             [
	                "class" => "form-control",
	                "placeholder" => "Zip Code",
	             ])
			}}
		    
		  </div>

		  <div class="form-group">
		  	{{ Form::label("Picture :", null, ['class' => 'control-label']) }}
		    
		    <input type="file" name="select_file" />
		    
		  </div><br>

	  {!! Form::button('Submit',
	  		[ 

	  			'type'=>'submit',
	  			"class" => "btn btn-primary"
	  		])
	  !!}


	  
	{!! Form::close() !!}

@endsection