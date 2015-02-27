@extends('master')

@section('main')

{{ Form::open() }}

	{{ Form::label('idea') }}
	{{ Form::text('idea') }}

	{{ Form::label('email') }}
	{{ Form::email('email') }}

{{ Form::close() }}

@stop