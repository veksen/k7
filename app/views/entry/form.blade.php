@extends('master')

@section('main')

<div class="well">

{{ Form::open(array('class'=>'form-horizontal')) }}

<legend>Participer au concours</legend>

<div class="row form-group{{ $errors->has('idea') ? ' has-error' : null }}">
	<div class="col-xs-3">{{ Form::label('idea', 'Idée', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">
		{{ $errors->first('idea', '<span class="msg error">:message</span>') }}
		{{ Form::text('idea', Input::old('idea'), array('class'=>'form-control', 'placeholder'=>'Idée')) }}
	</div>
</div>

<hr>

<div class="row form-group{{ $errors->has('email') ? ' has-error' : null }}">
	<div class="col-xs-3">{{ Form::label('email', 'E-mail', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">
		{{ $errors->first('email', '<span class="msg error">:message</span>') }}
		{{ Form::email('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'E-mail')) }}
	</div>
</div>

<div class="row form-group{{ $errors->has('firstname') ? ' has-error' : null }}">
	<div class="col-xs-3">{{ Form::label('firstname', 'Prénom', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">
		{{ $errors->first('firstname', '<span class="msg error">:message</span>') }}
		{{ Form::text('firstname', Input::old('firstname'), array('class'=>'form-control', 'placeholder'=>'Prénom')) }}
	</div>
</div>

<div class="row form-group{{ $errors->has('lastname') ? ' has-error' : null }}">
	<div class="col-xs-3">{{ Form::label('lastname', 'Nom', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">
		{{ $errors->first('lastname', '<span class="msg error">:message</span>') }}
		{{ Form::text('lastname', Input::old('lastname'), array('class'=>'form-control', 'placeholder'=>'Nom')) }}
	</div>
</div>

<div class="row form-group{{ $errors->has('address') ? ' has-error' : null }}">
	<div class="col-xs-3">{{ Form::label('address', 'Adresse', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">
		{{ $errors->first('address', '<span class="msg error">:message</span>') }}
		{{ Form::text('address', Input::old('address'), array('class'=>'form-control', 'placeholder'=>'Adresse')) }}
	</div>
</div>

<div class="row form-group{{ $errors->has('city') ? ' has-error' : null }}">
	<div class="col-xs-3">{{ Form::label('city', 'Ville', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">
		{{ $errors->first('city', '<span class="msg error">:message</span>') }}
		{{ Form::text('city', Input::old('city'), array('class'=>'form-control', 'placeholder'=>'Ville')) }}
	</div>
</div>

<div class="row form-group{{ $errors->has('zipcode') ? ' has-error' : null }}">
	<div class="col-xs-3">{{ Form::label('zipcode', 'Code postal', array('class'=>'control-label')) }}</div>
	<div class="col-xs-9">
		{{ $errors->first('zipcode', '<span class="msg error">:message</span>') }}
		{{ Form::text('zipcode', Input::old('zipcode'), array('class'=>'form-control', 'placeholder'=>'Code postal')) }}
	</div>
</div>

<div class="row form-group">
	<div class="col-xs-3"></div>
	<div class="col-xs-9">{{ Form::submit('Envoyer!', array('class'=>'btn btn-primary btn-lg btn-block')) }}</div>
</div>

{{ Form::close() }}

</div>

@stop