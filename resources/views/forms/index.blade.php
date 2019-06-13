@extents('layoutHome.default')

@section('content')

<form action="{{ route('forms.index') }}">
   <select name="gender">
       <option value="">Select Gender</option>
       <option value="Male">Male</option>
       <option value="Female">Female</option>
   </select>
<button type="submit">Filter</button>
</form>



<form action="{{ route('forms.index') }}">
       <select name="sort_by_name">
           <option value="">Select One</option>
           <option value="asc">Ascending</option>
           <option value="desc">Descending</option>
       </select>
       <button type="submit">Filter</button>
   </form>



<table>
   <a href="{{route('forms.create')}}">Add Category</a>
   <tr>
       <th>Sl</th>
       <th>Title</th>
       <th>Action</th>
   </tr>
   @foreach($forms as $form)
       <tr>
           <td>{{$form->id}}</td>
           <td>{{$form->title}}</td>
           <td>
               <a href="{{route('forms.edit',$form->id)}}" >Edit</a> 
<a  href="{{route('forms.show',$form->id)}}">Show</a>
               <form action="{{route('forms.destroy',$form->id)}}" method="post" style="display: inline-block">
                   @csrf
                   @method('delete')
                   <button type="submit">Delete</button>
               </form>
           </td>
       </tr>
   @endforeach
</table>

@endsection