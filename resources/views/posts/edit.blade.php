@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Post ID {{$post->id}}</h1>
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

    <form action="{{route('admin.posts.update', ['id' => $post -> id])}}" method="post">
        @csrf
    <div class="form-group">
        <label for="usr">Title:</label>
        <input type="text" value="{{$post->title}}" name="title" class="form-control" id="usr">
        <label for="comment">Content:</label>
        <textarea class="form-control" rows="5" name="content" id="comment">{{$post->content}}</textarea>
        <label for="comment">Categories:</label>
        <select multiple="" id="categories" name="categories[]" class="form-control">


            @foreach($categories as $category)
                <option value="{{ $category->id }}" @if(in_array($category->id, $post->category->map(function ($cat) { return $cat->id;})->toArray()))selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning">Confirm</button>
    </div>
    </form>


@stop
