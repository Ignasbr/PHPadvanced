@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Post ID {{$post->id}}</h1>
@stop

@section('content')

    <form action="{{route('admin.posts.update', ['id' => $post -> id])}}" method="post">
        @csrf
    <div class="form-group">
        <label for="usr">Title:</label>
        <input type="text" value="{{$post->title}}" name="title" class="form-control" id="usr">
        <label for="comment">Content:</label>
        <textarea class="form-control" rows="5" name="content" id="comment">{{$post->content}}</textarea>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning">Confirm</button>
    </div>
    </form>


@stop
