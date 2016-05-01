@extends('app')
@section('content')
    <div class="container">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="page-header">
                    <h1>Images</h1>
                </div>
                <div class="col-sm-12">
                    <a class="btn btn-success" href="{{route('admin.products.images.create', ['id'=>$product->id])}}"><i class="fa fa-plus"></i> New Image</a>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Extension</th>
                        <th>Action</th>
                    </tr>

                    @foreach($product->images as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td>
                            <img src="{{ url('uploads').'/'.$image->id.'.'.$image->extension }}" alt="" width="80px">
                        </td>
                        <td>{{ $image->extension }}</td>
                        <td>
                            <a class="btn btn-danger btn-xs" href="{{ route('admin.products.images.destroy', ['id'=>$image->id]) }}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a href="{{route('admin.products')}}" class="btn btn-default">Voltar</a>
            </div>
        </div>
    </div>
@endsection