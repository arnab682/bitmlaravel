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

    <form action="{{url('/slider/'.$slider->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        {{ method_field('put') }}

        <div class="form-group">
            <label class="control-label" for="title">Title</label>
            <input type="text" value="{{$slider->title}}" name="title"  class="form-control">
        </div>

        <div class="form-group">

            <img src="{{ asset('/picture/'.$slider->image) }}" width="150"><br><br>

            <input type="file" name="image"  class="">
        </div>

        <div class="form-group">
            <label class="control-label" for="caption">Caption</label>
            <input type="text" value="{{$slider->caption}}" class="form-control" id="caption" name="caption" placeholder="caption" required>
        </div>

        <div class="form-group">
            <label class="control-label" for="link">Link</label>
            <input type="text" value="{{$slider->link}}" class="form-control" id="link" name="link" placeholder="link" required>
        </div>

        <div class="form-group">
            <label>Is Active? </label>
            @if($slider->is_active==1)
                <input type="radio" name="is_active" value="1" checked>Yes
                <input type="radio" name="is_active" value="0">No
            @else
                <input type="radio" name="is_active" value="1">Yes
                <input type="radio" name="is_active" value="0" checked>No
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>

    </form>


  @endsection

