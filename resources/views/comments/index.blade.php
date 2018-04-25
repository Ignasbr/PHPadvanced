@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Comments</h1>
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
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>
    @foreach($comments as $comment)
                            <tr role="row" class="odd" style="background-color: @if($loop->index%2 == 0) #bdc3c7 @else white @endif">
                                <td >{{$comment->id}}</td>
                                <td >{{$comment->user->name}}</td>

                            </tr>
    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">

                    </div>
                    <div class="col-sm-7">
                        {{$comments->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
