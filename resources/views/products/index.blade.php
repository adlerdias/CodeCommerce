@extends('app')
@section('content')
    <div class="container">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="page-header">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-12">
                    <a class="btn btn-success" href="{{ route('admin.products.create') }}"><i class="fa fa-plus"></i> New Product</a>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>

                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a class="btn btn-success btn-xs" href="{{ route('admin.products.edit', ['id'=>$product->id]) }}"><i class="fa fa-search"></i></a>
                            <a class="btn btn-primary btn-xs" href="{{ route('admin.products.edit', ['id'=>$product->id]) }}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger btn-xs" href="{{ route('admin.products.destroy', ['id'=>$product->id]) }}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $products->render() !!}
            </div>
        </div>
    </div>
@endsection