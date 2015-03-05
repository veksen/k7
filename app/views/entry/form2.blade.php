@extends('master2')

@section('main')

<div class="well">

<style>
.form-horizontal .form-group {
	margin-left:0;
	margin-right:0
}
</style>


{{ Form::open(array('class'=>'form-horizontal')) }}

<legend>Participer au concours</legend>


<div class="form-group{{ $errors->has('idea') ? ' has-error' : null }}">
		{{ $errors->first('idea', '<span class="msg error">:message</span>') }}
		{{ Form::label('idea', 'Idée', array('class'=>'control-label')) }}
		{{ Form::text('idea', Input::old('idea'), array('class'=>'form-control', 'placeholder'=>'Idée')) }}
</div>

<hr>

<div class="form-group{{ $errors->has('email') ? ' has-error' : null }}">
		{{ $errors->first('email', '<span class="msg error">:message</span>') }}
		{{ Form::label('email', 'E-mail', array('class'=>'control-label')) }}
		{{ Form::email('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'E-mail')) }}
</div>

<div class="form-group{{ $errors->has('firstname') ? ' has-error' : null }}">
	{{ Form::label('firstname', 'Prénom', array('class'=>'control-label')) }}
		{{ $errors->first('firstname', '<span class="msg error">:message</span>') }}
		{{ Form::text('firstname', Input::old('firstname'), array('class'=>'form-control', 'placeholder'=>'Prénom')) }}
</div>

<div class="form-group{{ $errors->has('lastname') ? ' has-error' : null }}">
	{{ Form::label('lastname', 'Nom', array('class'=>'control-label')) }}
		{{ $errors->first('lastname', '<span class="msg error">:message</span>') }}
		{{ Form::text('lastname', Input::old('lastname'), array('class'=>'form-control', 'placeholder'=>'Nom')) }}
</div>

<div class="form-group{{ $errors->has('address') ? ' has-error' : null }}">
	{{ Form::label('address', 'Adresse', array('class'=>'control-label')) }}
		{{ $errors->first('address', '<span class="msg error">:message</span>') }}
		{{ Form::text('address', Input::old('address'), array('class'=>'form-control', 'placeholder'=>'Adresse')) }}
</div>

<div class="form-group{{ $errors->has('city') ? ' has-error' : null }}">
	{{ Form::label('city', 'Ville', array('class'=>'control-label')) }}
		{{ $errors->first('city', '<span class="msg error">:message</span>') }}
		{{ Form::text('city', Input::old('city'), array('class'=>'form-control', 'placeholder'=>'Ville')) }}
</div>

<div class="form-group{{ $errors->has('zipcode') ? ' has-error' : null }}">
	{{ Form::label('zipcode', 'Code postal', array('class'=>'control-label')) }}
		{{ $errors->first('zipcode', '<span class="msg error">:message</span>') }}
		{{ Form::text('zipcode', Input::old('zipcode'), array('class'=>'form-control', 'placeholder'=>'Code postal')) }}
</div>

<div class="form-group">
	{{ Form::submit('Envoyer!', array('class'=>'btn btn-primary btn-lg btn-block')) }}
</div>


{{ Form::close() }}

</div>

@stop
