@extends('app')
@section('content')
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="page-header">
                <h1>Create Category</h1>
            </div>
            {!! Form::model( $category, ['route' => ['admin.categories.update', $category->id], 'method' => 'put', 'role' => 'form'] ) !!}
            @include('categories/_campos')
            {!! Form::close() !!}
        </div>
    </div>
@endsection