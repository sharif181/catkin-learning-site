@extends('base')

@section('title')
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <title> {{ $type }} Courses | Catkin Software Solution Farm </title>
@endsection

@section('content')
    <h1 class="d-flex justify-content-center display-1 bg-light mt-5"> {{ $type }} Courses</h1>
    <div class="container mt-5 bg-light">
        @foreach ($courses as $item)
        <div class="card" style="width: 16.4rem;">
            <video width="260" height="200" controls>
                <source src="{{ URL::asset('storage/'.$item->video_path) }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <div class="card-body">
              <h5 class="card-title">{{$item->title}}</h5>
              <p class="card-text">{{$item->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Instructor: {{ $item->instractor }}</li>
            </ul>
            <div class="card-body">
              <a href="/coueselist/{{$item->id}}" class="btn btn-secondary">Full course link</a>
            </div>
          </div>
        @endforeach
    </div>

@endsection


@section('javascript')
    <script src="{{ asset('assets/js/home.js') }} "></script>
    <script src="{{ asset('assets/js/homeSub.js') }}"></script>
@endsection




