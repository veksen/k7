@extends('master')

@section('main')

{{ Form::open() }}

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('idea', 'Idée', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">{{ Form::text('idea', Input::old('idea'), array('class'=>'form-control')) }}</div>
</div>

<hr>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('email', 'E-mail') }}</div>
	<div class="col-xs-9">{{ Form::email('email', Input::old('email'), array('class'=>'form-control')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('firstname', 'Prénom') }}</div>
	<div class="col-xs-9">{{ Form::text('firstname', Input::old('firstname'), array('class'=>'form-control')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('lastname', 'Nom') }}</div>
	<div class="col-xs-9">{{ Form::text('lastname', Input::old('lastname'), array('class'=>'form-control')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('address', 'Adresse') }}</div>
	<div class="col-xs-9">{{ Form::text('address', Input::old('address'), array('class'=>'form-control')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('city', 'Ville') }}</div>
	<div class="col-xs-9">{{ Form::text('city', Input::old('city'), array('class'=>'form-control')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('zipcode', 'Code postal') }}</div>
	<div class="col-xs-9">{{ Form::text('zipcode', Input::old('zipcode'), array('class'=>'form-control')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3"></div>
	<div class="col-xs-9">{{ Form::submit('Envoyer!', array('class'=>'btn btn-primary btn-lg btn-block')) }}</div>
</div>



{{ Form::close() }}

@stop