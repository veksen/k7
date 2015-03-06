@extends('master')

@section('main')

<div class="well">

<legend>Liste des idées</legend>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th></th>
			<th>#</th>
			<th>Idée</th>
			<th>Email</th>
			<th>Nom</th>
			<th class="min-w"></th>
			<th class="min-w"></th>
			<th class="min-w"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($entries as $entry)
		@if($entry->status == '1')
		@include('entry._listrow')
		@endif
		@endforeach

		@foreach($entries as $entry)
		@if($entry->status == '0')
		@include('entry._listrow')
		@endif
		@endforeach

		@foreach($entries as $entry)
		@if($entry->status == '2')
		@include('entry._listrow')
		@endif
		@endforeach

		@foreach($entries as $entry)
		@if($entry->status == '3')
		@include('entry._listrow')
		@endif
		@endforeach
	</tbody>
</table>

</div>

@stop