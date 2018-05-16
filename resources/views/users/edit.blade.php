@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Edit user ID {{$user->id}}</h1>
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

    <form action="{{route('admin.users.update', ['id' => $user -> id])}}" method="post">
        @csrf
    <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" value="{{$user->name}}" name="name" class="form-control">
        <label for="usr">Email:</label>
        <input type="text" value="{{$user->email}}" name="email" class="form-control">
        <label for="usr">Role ID:</label>
        <input type="text" value="{{$user->role->id}}" name="role_id" class="form-control">

    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning">Confirm</button>
    </div>
    </form>


@stop
