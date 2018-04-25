@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Post ID {{$post->id}}</h1>
@stop

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$post->title}}</h3>

            </div>
            <div class="box-body">
                {{$post->content}}
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a type="button" href="{{ route('admin.posts.edit', ['id' => $post -> id])}}" class="btn btn-warning">Edit</a>
                <a type="button" href="{{ route('admin.posts.delete', ['id' => $post -> id])}}" class="btn btn-danger">Delete</a>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

        </section>


@stop
