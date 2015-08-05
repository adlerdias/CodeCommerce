@extends('app')
@section('content')
    <div class="container">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="page-header">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-12">
                    <a class="btn btn-success" href="{{ route('admin.categories.create') }}"><i class="fa fa-plus"></i> New Category</a>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>

                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a class="btn btn-success btn-xs" href="{{ route('admin.categories.edit', ['id'=>$category->id]) }}"><i class="fa fa-search"></i> Edit</a>
                            <a class="btn btn-primary btn-xs" href="{{ route('admin.categories.edit', ['id'=>$category->id]) }}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger btn-xs" href="{{ route('admin.categories.destroy', ['id'=>$category->id]) }}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $categories->render() !!}
            </div>
        </div>
    </div>
@endsection