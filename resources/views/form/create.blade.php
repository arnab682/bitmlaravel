@extends('layoutHome.default')

@section('content')

<div class="content">
	<form action="/form" method="post" enctype="multipart/form-data">@csrf
		<div class="form-group">
				<label>Image :</label>
				<input type="file" name="imageUpload">
		</div>

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
				<input type="radio" name="gender" checked value="1">Male
				<input type="radio" name="gender" value="1">Female
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
		            <option name="skil" value = "Maths" selected>Maths</option>
		            <option name="skill" value = "Physics">Physics</option>
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