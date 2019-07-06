@extends('layoutSlider.pdfdefault')

@section('content')


    <table id="dt_table" class="table table-bordered">
        <thead class="">
        <tr>
            <th>Sl.</th>
            <th>Image Title</th>

            <th>Caption</th>
            <th>Link</th>
            <th>Active</th>
            <th>Created At</th>
            <th>Modified At</th>

        </tr>
        </thead>
        @php
            $sl = 0;
        @endphp
        @foreach($sliders as $slider)
            <tr>
                <td>{{++$sl}}</td>
                {{--<td><a href={{url('labs',$slider->id)}}>{{$slider['title']}} </a></td>--}}
                <td><a href={{route('slider.show',$slider->id)}}>{{$slider['title']}} </a></td>

                            <td>{{$slider['caption']}}</td>
                <td><a href={{route('slider.show',$slider->id)}}}}">{{$slider['link']}}</a></td>
                @if($slider->is_active==1)
                    <td> Active </td>
                    @else
                    <td>De Active</td>
                @endif
                <td>{{$slider['created_at']}}</td>
                <td>{{$slider['updated_at']}}</td>

            </tr>
        @endforeach
    </table>


@endsection

