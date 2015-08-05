<div class="form-group @if ($errors->has('category_id')) has-error @endif">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', $categories, ['class'=>'form-control']) !!}
    @if ($errors->has('category_id')) <p class="help-block">{{ $errors->first('category_id') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('name')) has-error @endif">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('description')) has-error @endif">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textArea('description', null, ['class'=>'form-control']) !!}
    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('price')) has-error @endif">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class'=>'form-control']) !!}
    @if ($errors->has('price')) <p class="help-block">{{ $errors->first('price') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('featured')) has-error @endif">
    {!! Form::label('featured', 'Featured:') !!}{!! Form::checkbox('featured', 1,  null, ['class' => '']) !!}
    @if ($errors->has('featured')) <p class="help-block">{{ $errors->first('featured') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('recommend')) has-error @endif">
    {!! Form::label('recommend', 'Recommend:') !!}{!! Form::checkbox('recommend', 1,  'recommend', ['class' => '']) !!}
    @if ($errors->has('recommend')) <p class="help-block">{{ $errors->first('recommend') }}</p> @endif
</div>


<div class="form-group">
    {!! Form::submit('Add Product', ['class'=>'btn btn-primary form-control']) !!}
</div>