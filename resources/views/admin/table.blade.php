<div class="card border-light shadow-sm mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0">#</th>
                        <th class="border-0">Course title</th>
                        <th class="border-0">Instractor name</th>
                        <th class="border-0">Category</th>
                        <th class="border-0">Total resourse</th>
                        <th class="border-0">Starting date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach ($courseslist as $key=>$item)
                    <tr>
                        <td class="border-0"><a href="#" class="text-primary font-weight-bold">{{ $key+1 }}</a> </td>
                        <td class="border-0 font-weight-bold"><span class="icon icon-xs icon-gray w-30"><span class="fas fa-globe-europe"></span></span>{{$item->title}}</td>
                        <td class="border-0">
                            {{$item->instractor}}
                        </td>
                        <td class="border-0">
                           {{$item->type}}
                        </td>
                        <td class="border-0">
                           {{$res[$key++]}}
                        </td>
                        <td class="border-0">
                            {{$item->startdate}}
                         </td>
                    </tr>
                    @endforeach

                    <!-- End of Item -->
                </tbody>
            </table>
        </div>
    </div>
</div>
