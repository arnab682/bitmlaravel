<a href="{{ route('forms.index') }}"> Back to List Page</a>

    <p><strong>Title : </strong> {{ $form->title }}</p>
    <p><strong>Title : </strong> {{ $form->created_at->diffForHumans() }}</p>


<table>
   <tr>
       <td>Name</td>
       <td>{{ $form>name }}</td>
   </tr>
   <tr>
       <td>Picture</td>
       <td></td>
   </tr>
   <tr>
       <td>Gender</td>
       <td>{{ $form>gender }}</td>
   </tr>
   <tr>
       <td>Date Of Birth</td>
       <td>{{ $form>date_of_birth->toFormattedDateString() }}</td>
   </tr>
   <tr>
       <td>Hobby</td>
       <td>
           <ul>
               @foreach(unserialize($form>hobby) as $hobby)
                   <li>{{ $hobby }}</li>
               @endforeach
           </ul>
       </td>
   </tr>
   <tr>
       <td>Skills</td>
       <td>
           @foreach(unserialize($form>skills) as $skill)
               <li>{{ $skill }}</li>
           @endforeach
       </td>
   </tr>
   <tr>
       <td>Bio data</td>
       <td>{!! $form>bio !!}</td>
   </tr>
</table>

