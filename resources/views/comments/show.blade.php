@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Comment ID {{$comment->id}}</h1>
@stop

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <label for="usr">Post title:</label>
                <h3 class="box-title">{{$comment->post->title}}</h3>

            </div>
            <div class="box-body">
                <label for="usr">Post content:</label>
                {{$comment->post->content}}
            </div>
            <div class="box-body">
                <label for="usr">Comment content:</label>
                {{$comment->content}}
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a type="button" href="{{ route('admin.comments.edit', ['id' => $comment -> id])}}" class="btn btn-warning">Edit</a>
                <a type="button" href="{{ route('admin.comments.delete', ['id' => $comment -> id])}}" class="btn btn-danger">Delete</a>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

        </section>


@stop
