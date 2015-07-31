@extends('app')
@section('content')
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="page-header">
                <h1>Create Product</h1>
            </div>
            {!! Form::open(array( 'route' => ['admin.products.store'], 'role' => 'form' ) ) !!}
                @include('products/_campos')
            {!! Form::close() !!}
        </div>
    </div>
@endsection