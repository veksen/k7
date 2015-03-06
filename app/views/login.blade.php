@extends('master')

@section('main')

<div class="well">

{{ Form::open(array('class'=>'form-horizontal')) }}

<legend>Login</legend>

<div class="row form-group{{ $errors->has('email') ? ' has-error' : null }}">
	<div class="col-xs-3">{{ Form::label('email', 'E-mail', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">
		{{ Form::text('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'E-mail')) }}
	</div>
</div>

<div class="row form-group{{ $errors->has('password') ? ' has-error' : null }}">
	<div class="col-xs-3">{{ Form::label('password', 'Mot de passe', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">
		{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Mot de passe')) }}
	</div>
</div>

<div class="row form-group">
	<div class="col-xs-3"></div>
	<div class="col-xs-9">{{ Form::submit('Se connecter!', array('class'=>'btn btn-primary btn-lg btn-block')) }}</div>
</div>

{{ Form::close() }}

</div>

@stop