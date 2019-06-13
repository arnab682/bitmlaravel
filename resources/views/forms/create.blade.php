@if ($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif



{!! Form::open([
       'route'=>'forms.store',
       'method'=>'post'
       ]) !!}

@include('forms.form')
{!! Form::close() !!}



<form action="{{ route('forms.update', $form>id) }}" enctype="multipart/form-data" method="post">

name: value="{{ $form>name }}"

date of birth: value="{{\Carbon\Carbon::parse($form>date_of_birth)->format('Y-m-d') }}"

gender: value="Male"  {{ $form>gender=='Male' ? 'checked' : '' }}
	  value="Female" {{ $form>gender=='Female' ? 'checked' : '' }}

hobby: name="hobby[]" value="Listening" {{ in_array('Listening', unserialize($form>hobby)) ? 'checked' : '' }}
name="hobby[]" value="Reading" {{ in_array('Reading', unserialize($form>hobby)) ? 'checked' : '' }}
name="hobby[]" value="Coding"  {{ in_array('Coding', unserialize($form>hobby)) ? 'checked' : '' }}

<select name="skills[]" multiple>
   <option value="">Select One</option>
   <option value="PHP" {{ in_array('PHP', unserialize($form>skills)) ? 'selected' : '' }}>PHP</option>
   <option value="JavaScript" {{ in_array('JavaScript', unserialize($form>skills)) ? 'selected' : '' }}>JavaScript</option>
   <option value="MySql" {{ in_array('MySql', unserialize($form>skills)) ? 'selected' : '' }}>MySql</option>
</select>

<textarea name="bio" id="bioData">
   {{ $form>bio }}
</textarea>
		



