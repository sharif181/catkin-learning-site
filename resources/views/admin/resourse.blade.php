@extends('admin.adminbase')

@section('title')
    <title>CATKIN add Resourse</title>
@endsection

@section('content')
<main class="content">
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body bg-white border-light shadow-sm mb-4">
                <h2 class="h5 mb-4">Add resourse</h2>
                <form action="/admin/uploadresourse" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">Select Course </label>
                                <select name="ctitle" class="form-select mb-0" id="gender" aria-label="Gender select example" required>
                                    @foreach ($courses as $item)
                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">Title</label>
                                <input name="vtitle" class="form-control" id="first_name" type="text" placeholder="Enter course title " required>
                            </div>
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
                                <label for="zip">Resourse</label>
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


