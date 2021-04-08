@extends('admin.adminbase')



@section('title')
    <title>CATKIN Blog detail</title>
@endsection

@section('content')
<main class="content">
    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="card border-light shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0">#</th>
                                        <th class="border-0">Blog title</th>
                                        <th class="border-0">Author</th>
                                        <th class="border-0">Category</th>
                                        <th class="border-0">Short note</th>
                                        <th class="border-0">Edit</th>
                                        <th class="border-0">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Item -->
                                    @foreach ($blogs as $key=>$item)
                                    <tr>
                                        <td class="border-0"><a href="#" class="text-primary font-weight-bold">{{ $key+1 }}</a> </td>
                                        <td class="border-0 font-weight-bold"><span class="icon icon-xs icon-gray w-30"><span class="fas fa-globe-europe"></span></span>{{$item->title}}</td>
                                        <td class="border-0">
                                            {{$item->author}}
                                        </td>
                                        <td class="border-0">
                                        {{$item->type}}
                                        </td>
                                        <td class="border-0">
                                            {{$item->brief}}
                                        </td>
                                        <td class="border-0">
                                            <form action="/admin/blog/edit/{{ $item->id }}" method="POST">
                                                @csrf
                                                <button class="btn btn-primary"> Edit </button>
                                            </form>
                                        </td>
                                        <td class="border-0">
                                            <form action="/admin/blog/delete/{{ $item->id }}" method="post">
                                                @csrf
                                                <button class="btn btn-danger"> Delete </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                    <!-- End of Item -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</main>
@endsection
