@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Comment ID {{$comment->id}}</h1>
@stop

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('admin.comments.update', ['id' => $comment -> id])}}" method="post">
        @csrf
    <div class="form-group">
        <label for="usr">Post title:</label>
        {{$comment->post->title}} <br>
        <label for="comment">Comment Content:</label>
        <textarea class="form-control" rows="5" name="content" id="comment">{{$comment->content}}</textarea>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning">Confirm</button>
    </div>
    </form>


@stop
