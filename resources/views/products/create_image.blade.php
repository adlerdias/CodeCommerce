@extends('app')
@section('content')
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="page-header">
                <h1>Upload Image</h1>
            </div>
            {!! Form::open(
                array(
                    'route' => [
                        'admin.products.images.store',
                        $product->id
                    ],
                'method'=>'post',
                'enctype'=>'multipart/form-data', 'role' => 'form' ) ) !!}

            <div class="form-group @if ($errors->has('image')) has-error @endif">
                {!! Form::label('image', 'Image:') !!}
                {!! Form::file('image', null, ['class'=>'form-control']) !!}
                @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
            </div>

            <div class="form-group">
                {!! Form::submit('Upload Image', ['class'=>'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection