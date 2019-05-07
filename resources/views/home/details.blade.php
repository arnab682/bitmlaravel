@extends('layoutHome.default')

@section('content')

	<div class="card">
        <img src="http://lorempixel.com/output/cats-q-c-400-200-9.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$profile['firstname']}} {{$profile['lastname']}}</h5>
            <p class="card-text">{{$profile['about_me']}} </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$profile['gender']}} </li>
            <li class="list-group-item">{{$profile['hobby']}} </li>
            <li class="list-group-item">{{$profile['preferred_languages']}} </li>
            <li class="list-group-item">{{$profile['address_line']}} </li>
            <li class="list-group-item">{{$profile['zipcode']}} </li>
            <li class="list-group-item">{{$profile['city']}} </li>
            <li class="list-group-item">{{$profile['country']}} </li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Download Resume</a>
            Last Updated {{$profile['updated_at']}}
        </div>
    </div>


@endsection

@section('slider')
	n/a
@endsection