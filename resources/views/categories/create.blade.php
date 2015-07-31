@extends('app')
@section('content')
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="page-header">
                <h1>Create Category</h1>
            </div>
            {!! Form::open(array( 'route' => ['admin.categories.store'], 'role' => 'form' ) ) !!}
                @include('categories/_campos')
            {!! Form::close() !!}
        </div>
    </div>
@endsection