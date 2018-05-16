@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Posts</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                               aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Created at</th>
                                <th>User name</th>
                                <th>Comments Count</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
    {{--@each('posts.partials.posts_row', $posts, 'post')--}}
                            @include('posts.partials.posts_row')
                            </tbody>
                        </table>
                    </div>
                </div>

                    <div class="col-sm-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                            Showing {{ ($posts->currentPage() * $posts->perPage() +1 - $posts->perPage()) }} to {{ ($posts->currentPage() * $posts->perPage() - $posts->perPage() + $posts->count()) }} of {{$posts->total()}} entries
                        </div>
                    </div>
                    <div class="col-sm-7">
                        {{$posts->links()}}
                    </div>
                <div class="row"><div class="col-sm-7">
                        <a type="button" href="{{route('admin.posts.create')}}" class="btn btn-success">Add post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
