
@extends('base')

@section('title')
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
    crossorigin="anonymous">
    <title> Blogs | Catkin Software Solution Farm </title>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection
@section('content')
<div class="container mt-5">
    <a href="/blogs/all" type="button" class="btn btn-secondary mr-2">All</a>
    <a href="/blogs/android" type="button" class="btn btn-secondary ml-2">Android</a>
    <a href="/blogs/web" type="button" class="btn btn-secondary ml-2">Web</a>
    <a href="/blogs/programming" type="button" class="btn btn-secondary ml-2">Programming</a>
    <a href="/blogs/java" type="button" class="btn btn-secondary ml-2">Java</a>
    <a href="/blogs/python" type="button" class="btn btn-secondary ml-2">Python</a>
    <a href="/blogs/other" type="button" class="btn btn-secondary ml-2">Others</a>
</div>
<div class="container mt-5 bg-light">
    <div class="row  mb-4">
        @foreach ($blogs as $blog)
            <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{ Str::ucfirst($blog->title) }}</h5>
                <p class="card-text">{{ Str::ucfirst($blog->brief) }}</p>
                <a href="/blogdetail/{{$blog->id}}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('javascript')
<!--===================================JS Link Section================================-->
<script src="{{ asset('assets/js/home.js') }} "></script>
<script src="{{ asset('assets/js/homeSub.js') }}"></script>
@endsection
