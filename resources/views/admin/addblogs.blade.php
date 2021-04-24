@extends('admin.adminbase')


@section('title')
    <title>CATKIN add Blogs</title>
@endsection
<main class="content">
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body bg-white border-light shadow-sm mb-4">
                @if ($blog)
                    <h2 class="h5 mb-4">Edit blog</h2>
                    <form action="/admin/edit/{{$blog->id}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div>
                                    <label for="first_name">Blog title </label>
                                    <input name="title" value="{{$blog->title}}" class="form-control" id="first_name" type="text" placeholder="Enter course title " required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div>
                                    <label for="last_name">Author</label>
                                    <input name="author" value="{{$blog->author}}" class="form-control" id="last_name" type="text" placeholder="Enter Instractor name " required>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="birthday">Short note </label>
                                <input name="brief" class="form-control" value="{{$blog->brief}}"  id="last_name" type="text" placeholder="Enter Instractor name " required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gender">Catagory </label>
                                <select name="type" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                    <option value="{{ $blog->type }}"> {{$blog->type}} </option>
                                    <option value="android">Android</option>
                                    <option value="web">Web</option>
                                    <option value="programming">Programming</option>
                                    <option value="java">Java</option>
                                    <option value="python">Python</option>
                                    <option value="other">Others</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Content </label>
                                    <textarea name="content" class="form-control" id="email" type="text" placeholder="Description" required>{{$blog->content}} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                @else
                <h2 class="h5 mb-4">Blog add form</h2>
                <form action="{{ route('addblog') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">Blog title </label>
                                <input name="title" class="form-control" id="first_name" type="text" placeholder="Enter course title " required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Author</label>
                                <input name="author" class="form-control" id="last_name" type="text" placeholder="Enter Instractor name " required>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="birthday">Short note </label>
                            <input name="brief" class="form-control" id="last_name" type="text" placeholder="Enter Instractor name " required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gender">Catagory </label>
                            <select name="type" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                <option selected value="android">Android</option>
                                <option value="web">Web</option>
                                <option value="programming">Programming</option>
                                <option value="java">Java</option>
                                <option value="python">Python</option>
                                <option value="other">Others</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Content </label>
                                <textarea name="content" class="form-control" id="email" type="text" placeholder="Description" required> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                @endif

            </div>
        </div>
    </div>
    <footer class="footer section py-5">
        <div class="row">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <p class="mb-0 text-center text-xl-left">Copyright © 2021-<span class="current-year"></span> <a class="text-primary font-weight-normal" href="https://themesberg.com" target="_blank">CATKIN</a></p>
            </div>
        </div>
    </footer>
</main>

@section('content')

@endsection
