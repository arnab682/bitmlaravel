
@if ($errors->any())
   <div class="alert alert-danger">
   <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
   </div>
@endif



{{ Form::model($form,[ 'route'=>['forms.update', $form->id],
       'method'=>'put'])}}

@include('forms.form')

{{ Form::close() }}
