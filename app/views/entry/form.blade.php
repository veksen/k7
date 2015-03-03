@extends('master')

@section('main')

{{ Form::open() }}

<div class="row form-group">

	<div class="col-xs-3">{{ Form::label('idea', 'Idée', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">{{ Form::text('idea', Input::old('idea'), array('class'=>'form-control')) }}</div>

</div>

<hr>

<div class="row form-group">

	<div class="col-xs-3">{{ Form::label('email') }}</div>
	<div class="col-xs-9">{{ Form::email('email', Input::old('email'), array('class'=>'form-control')) }}</div>

</div>

{{ Form::close() }}

@stop