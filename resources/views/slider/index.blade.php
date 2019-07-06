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

    <div><a href="{{route('slider.create')}}" class="btn btn-success">Add New</a>
        <a href="{{route('mydownloadpdf')}}" class="btn btn-primary">PDF</a>
        <a href="{{route('mydownloadxl')}}" class="btn btn-info">XL</a>
        <button onclick="print()">Print</button>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Sl.</th>
            <th>Image Title</th>
            <th>Image</th>
            <th>Caption</th>
            <th>Link</th>
            <th>Active</th>
            <th>Created At</th>
            <th>Modified At</th>
            <th>Action</th>
        </tr>
        @php
            $sl = 0;
        @endphp
        @foreach($sliders as $slider)
            <tr>
                <td>{{++$sl}}</td>
                {{--<td><a href="{{url('labs',$slider->id)}}">{{$slider['title']}} </a></td>--}}
                <td><a href="{{route('slider.show',$slider->id)}}">{{$slider['title']}} </a></td>

                <td>
                    <img src="{{ asset('images/'.$slider->image) }}" width="100" height="100">
                </td>
                <td>{{$slider['caption']}}</td>
                <td><a href="{{route('slider.show',$slider->id)}}}}">{{$slider['link']}}</a></td>
                
                @if($slider->is_active==1)
                    <td> Active {!! Form::open(array('url' => ['slider/deactivate'],'onclick'=>"return confirm('Are you sure you want to DeActivate this item?');",'method' => 'PUT')) !!}
                        <input type="hidden" value="{{$slider->id}}" class="form-control" id="id" name="id">
                        <button type="submit" class="btn btn-primary">De Activate</button>
                        {!! Form::close() !!}</td>
                    @else
                    <td>De Active{!! Form::open(array('url' => ['slider/activate'],'onclick'=>"return confirm('Are you sure you want to Activate this item?');",'method' => 'PUT')) !!}
                        <input type="hidden" value="{{$slider->id}}" class="form-control" id="id" name="id">
                        <button type="submit" class="btn btn-primary"> Activate</button>
                        {!! Form::close() !!}</td>
                @endif




                <td>{{$slider['created_at']}}</td>
                <td>{{$slider['updated_at']}}</td>
                <td>
                     <a href="{{route('slider.edit',$slider->id)}}">Edit</a>|
                    {!! Form::open(array('url' => ['slider',$slider->id],'onclick'=>"return confirm('Are you sure you want to delete this item?');",'method' => 'DELETE')) !!}
                    {{--{!! Form::open(array('route' => ['labs.destroy',$slider->id],'method' => 'DELETE')) !!}--}}
                    <button type="submit" class="btn btn-primary">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('sidebar')
    n/a
@endsection