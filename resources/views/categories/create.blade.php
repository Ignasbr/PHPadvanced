@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Create Category</h1>
@stop

@section('content')

    <form action="{{route('admin.categories.store')}}" method="post">
        @csrf
    <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" placeholder="Category name" name="name" class="form-control" id="usr">
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning">Confirm</button>
    </div>
    </form>




@stop

