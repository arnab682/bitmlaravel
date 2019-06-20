@extends('layoutHome.default')


@section('content')

    <div class="card">

        <dl>
            <dt>ID</dt>
            <dd>{{$slider->id}}</dd>

            <dt>Title</dt>
            <dd>{{$slider->title}}</dd>

            <dt>Image</dt>
            <dd> <img src="{{ asset('picture/'.$slider->image) }}" width="100" height="100"></dd>

            <dt>Caption</dt>
            <dd>{{$slider->caption}}</dd>

            <dt>Created At</dt>
            <dd>{{$slider->created_at}}</dd>

            <dt>Updated At</dt>
            <dd>{{$slider->updated_at}}</dd>
        </dl>

    </div>
@endsection

@section('sidebar')
    n/a
@endsection