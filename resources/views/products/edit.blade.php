@extends('app')
@section('content')
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="page-header">
                <h1>Create Product</h1>
            </div>
            {!! Form::model( $product, ['route' => ['admin.products.update', $product->id], 'method' => 'put', 'role' => 'form'] ) !!}
            @include('products/_campos')
            {!! Form::close() !!}
        </div>
    </div>
@endsection