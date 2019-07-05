@extends('layoutHome.default')

@section('content')

	@if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<div class="content">
	<form action="/form" method="post" enctype="multipart/form-data">@csrf
		<div class="form-group">
	        <label for="exampleInputFile">File input</label>
	        <input type="file" name="profile_image" id="exampleInputFile">
	    </div>
	    {{ csrf_field() }}


		<div class="form-group">
				<label>Name :</label>
				<input type="text" name="name">
		</div>

		<div class="form-group">
				<label>Password :</label>
				<input type="Password" name="password">
		</div>

		<div class="form-group">
				<label>Gender :</label>
				<select name="gender">
			       <option value="">Select Gender</option>
			       <option value="Male">Male</option>
			       <option value="Female">Female</option>
  				</select>

		</div>

		<div class="form-group">

        <label for="inputDateofBirth">Date of Birth :</label>
        <input type="date" class="form-control" id="inputDateofBirth" name="dob" style="width: 200px">

    </div>

		<div class="form-group">
				<label>Language :</label>
				<input type="checkbox" name="language" value="1">English
				<input type="checkbox" name="language" value="1">Bangla
		</div>

		<div class="form-group">
				<label>Skill :</label>
				<select name = "dropdown" style="width: 200px">
					<option selected disabled value="0">Selected Skill</option>
		            <option value = "1" >Maths</option>
		            <option value = "2">Physics</option>
		        </select>
		</div>

		<div class="form-group">
				<label>Address :</label>
				<textarea name="description" rows="1" cols="20" placeholder="Your Address..."></textarea>
		</div>

		<div class="form-group">
			<input type = "submit" name = "submit" value = "Submit" />
         	<input type = "reset" name = "reset"  value = "Reset" />
		</div>

	</form>
</div>

@endsection
