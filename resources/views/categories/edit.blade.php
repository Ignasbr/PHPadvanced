@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Category Name {{$category->name}}</h1>
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

    <form action="{{route('admin.categories.update', ['id' => $category -> id])}}" method="post">
        @csrf
    <div class="form-group">
        <label for="comment">Category name:</label>
        <textarea class="form-control" rows="5" name="name" id="comment">{{$category->name}}</textarea>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning">Confirm</button>
    </div>
    </form>


@stop
