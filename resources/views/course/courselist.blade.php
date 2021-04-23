@extends('base')


@section('title')
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <title> Courses | Catkin Software Solution Farm </title>
@endsection

@section('content')
    <h3 class="d-flex justify-content-center display-3 bg-light mt-5">Courses</h3>
    <div class="container bg-light">
        <div class="row">
            <div class="card m-3 mt-5">
                <h3 class="display-3"> Intro Video</h3>
                <video class="ml-5" width="900" height="400" controls>
                    <source src="{{ URL::asset('storage/'.$course->video_path) }}" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
                <div class="card-body">
                  <h5 class="card-title">Course title: {{ Str::ucfirst($course->title) }}</h5>
                  <p class="card-text">{{ Str::ucfirst($course->description) }}</p>
                  <p class="card-text"><small class="text-muted">Instractor: {{ Str::ucfirst($course->instractor) }}</small></p>
                </div>
            </div>


            @if ($resourses)
                <h3 class="display-3 mt-5"> Resourses</h3>
                @foreach ($resourses as $item)
                    <div class="card m-3 mt-5">
                        <video class="ml-5" width="900" height="400" controls>
                            <source src="{{ URL::asset('storage/resource/'.$item->resource_path) }}" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                        <div class="card-body">
                        <h5 class="card-title">{{ Str::ucfirst($item->video_title) }}</h5>
                        <p class="card-text">{{ Str::ucfirst($item->description) }}</p>
                        <p class="card-text"><small class="text-muted">Instractor: {{ Str::ucfirst($course->instractor) }}</small></p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection



@section('javascript')
<script src="{{ asset('assets/js/home.js') }} "></script>
<script src="{{ asset('assets/js/homeSub.js') }}"></script>
@endsection
