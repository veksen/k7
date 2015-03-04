@extends('master')

@section('main')

<div class="well">

{{ Form::open(array('class'=>'form-horizontal')) }}

<legend>Participer au concours</legend>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('idea', 'Idée', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">{{ Form::text('idea', Input::old('idea'), array('class'=>'form-control', 'placeholder'=>'Idée')) }}</div>
</div>

<hr>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('email', 'E-mail', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">{{ Form::email('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'E-mail')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('firstname', 'Prénom', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">{{ Form::text('firstname', Input::old('firstname'), array('class'=>'form-control', 'placeholder'=>'Prénom')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('lastname', 'Nom', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">{{ Form::text('lastname', Input::old('lastname'), array('class'=>'form-control', 'placeholder'=>'Nom')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('address', 'Adresse', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">{{ Form::text('address', Input::old('address'), array('class'=>'form-control', 'placeholder'=>'Adresse')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('city', 'Ville', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">{{ Form::text('city', Input::old('city'), array('class'=>'form-control', 'placeholder'=>'Ville')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3">{{ Form::label('zipcode', 'Code postal', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">{{ Form::text('zipcode', Input::old('zipcode'), array('class'=>'form-control', 'placeholder'=>'Code postal')) }}</div>
</div>

<div class="row form-group">
	<div class="col-xs-3"></div>
	<div class="col-xs-9">{{ Form::submit('Envoyer!', array('class'=>'btn btn-primary btn-lg btn-block')) }}</div>
</div>

{{ Form::close() }}

</div>

@stop