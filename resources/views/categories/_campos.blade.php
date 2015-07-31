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

<div class="form-group">
    {!! Form::submit('Add Category', ['class'=>'btn btn-primary form-control']) !!}
</div>