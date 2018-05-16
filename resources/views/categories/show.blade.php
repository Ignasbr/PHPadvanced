@extends ('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Category Name {{$category->name}}</h1>
@stop

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <label for="usr">Category name:</label>
                <h3 class="box-title">{{$category->name}}</h3>

            </div>
            <div class="box-body">

            </div>
            <div class="box-body">

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a type="button" href="{{ route('admin.categories.edit', ['id' => $category -> id])}}" class="btn btn-warning">Edit</a>
                <a type="button" href="{{ route('admin.categories.delete', ['id' => $category -> id])}}" class="btn btn-danger">Delete</a>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

        </section>


@stop
