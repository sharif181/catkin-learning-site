@extends('admin.adminbase')
@section('title')
    <title>Add new Course</title>
@endsection
@section('content')
<main class="content">
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body bg-white border-light shadow-sm mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <p class="text-white">{{ $error }}</p>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">Course title: </label>
                                <input name="course_title" class="form-control" id="first_name" type="text" placeholder="Enter course title " required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Instractor Name: </label>
                                <input name="iname" class="form-control" id="last_name" type="text" placeholder="Enter Instractor name " required>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="birthday">Course start date: </label>
                            <div class="input-group">
                                <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                <input name="cstart" data-datepicker="" class="form-control" id="birthday" type="date" placeholder="mm/dd/yyyy" required>
                             </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gender">Catagory: </label>
                            <select name="type" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                <option selected value="android">Android</option>
                                <option value="web">Web</option>
                                <option value="programming">Programming</option>
                                <option value="graphics">Graphics</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Description: </label>
                                <textarea name="desc" class="form-control" id="email" type="text" placeholder="Description" required> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="zip">Introductory video</label>
                                <input name="file" class="form-control" id="zip" type="file" accept=".mp4" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
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
@endsection
