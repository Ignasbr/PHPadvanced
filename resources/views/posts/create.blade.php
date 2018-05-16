@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Create Post</h1>
@stop

@section('content')

    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
    <div class="form-group">
        <label for="usr">Title:</label>
        <input type="text" placeholder="Post Title" name="title" class="form-control" id="usr">
        <label for="comment">Content:</label>
        <textarea class="form-control" rows="5" placeholder="Post Content" name="content" id="comment">{{old('content')}}</textarea>
        <label for="usr">Anonymous Comments:</label>
        <div class="radio">
            <label><input type="radio" value="1" name="anonymous_comments">Yes</label>
            <label><input type="radio" value="0" name="anonymous_comments">No</label>
        </div>

        <select multiple="multiple" name="categories[]" id="cetegories">
            <option value="" disabled selected>Chose category</option>
            <option value="1">Cars</option>
            <option value="2">Technology</option>
            <option value="3">Photography</option>
            <option value="4">Sport</option>
            <option value="5">Nature</option>
        </select>

    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning">Confirm</button>
    </div>
    </form>




@stop

