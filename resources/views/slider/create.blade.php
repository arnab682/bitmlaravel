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

    <form action="{{url('/slider')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="control-label" for="title">Title</label>
            <input type="text" name="title" placeholder="Title"  class="form-control">
        </div>

        <div class="form-group">

            <input type="file" name="image"  class="">
        </div>

        <div class="form-group">
            <label class="control-label" for="caption">Caption</label>
            <input type="text" class="form-control" id="caption" name="caption" placeholder="caption" required>
        </div>

        <div class="form-group">
            <label class="control-label" for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="link" required>
        </div>

        <div class="form-group">
            <label>Is Active? </label>
            <input type="radio" name="is_active" value="1">Yes
            <input type="radio" name="is_active" value="0">No
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>

    </form>


    {{--{!! Form::open(array('url' => 'labs','method' => 'POST')) !!}--}}
    {{--<div class="form-group">--}}
        {{--{{--}}
            {{--Form::label("Lab Title",--}}
            {{--null,--}}
            {{--[--}}
                {{--'class' => 'control-label',--}}
                {{--'for'=>'title',--}}
            {{--])--}}
        {{--}}--}}
        {{--{{--}}
            {{--Form::text("title",--}}
            {{--old("title") ? old("title") : (!empty($lab) ? $lab->title : null),--}}
            {{--[--}}
             {{--"class" => "form-control",--}}
             {{--"placeholder" => "lab title",--}}
             {{--"id"=>"lab",--}}
             {{--"aria-describedby"=>"titleHelp"--}}

           {{--]--}}
           {{--)--}}
        {{--}}--}}


    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{{--}}
            {{--Form::label("Lab Detail",--}}
            {{--null,--}}
            {{--[--}}
                {{--'class' => 'control-label',--}}
                {{--'for'=>'detail',--}}
            {{--])--}}
        {{--}}--}}
        {{--{{--}}
            {{--Form::textarea("detail",--}}
            {{--old("detail") ? old("detail") : (!empty($lab) ? $lab->detail : null),--}}
            {{--[--}}
             {{--"class" => "form-control",--}}
             {{--"placeholder" => "lab detail",--}}
             {{--"id"=>"lab",--}}
             {{--"aria-describedby"=>"detailHelp"--}}

           {{--]--}}
           {{--)--}}
        {{--}}--}}


    {{--</div>--}}


    {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
    {{--{!! Form::close() !!}--}}
@endsection

@section('sidebar')
    n/a
@endsection