@extends('base')
    @section('title')
    <title> Blog detail | Catkin Software Solution Farm </title>
    <link rel="stylesheet" href="{{ asset('assets/css/blogDetails.css') }}">
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
        crossorigin="anonymous">
    @endsection

    @section('content')
        <div class="container bg-light mt-5 mb-5">
            <div class="card">
                <h5 class="card-header">{{ Str::ucfirst($blog->title) }}</h5>
                <div class="card-body">
                  <h5 class="card-title"> {{ Str::ucfirst($blog->author) }} </h5>
                  <p class="card-text">{{ Str::ucfirst($blog->content) }}</p>
                  <a href="/blogs/all" class="btn btn-primary">Go Back</a>
                </div>
              </div>
        </div>
    @endsection

   @section('javascript')
    <script src="{{ asset('assets/js/blogDetails.js') }}"></script>
   @endsection

