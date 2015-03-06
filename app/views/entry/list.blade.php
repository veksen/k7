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
		<tr class="{{ Lang::get('k7.status.'.$entry->status) }}">
			<td>{{ $entry->status }}</td>
			<td>{{ $entry->id }}</td>
			<td>{{ $entry->idea }}</td>
			<td>{{ $entry->email }}</td>
			<td>{{ $entry->firstname . ' ' . $entry->lastname }}</td>
			<td><a href="{{ route('entries.tag', array($entry->id, 1)) }}">bon</a></td>
			<td><a href="{{ route('entries.tag', array($entry->id, 2)) }}">dsq</a></td>
			<td><a href="{{ route('entries.tag', array($entry->id, 3)) }}">del</a></td>
		</tr>
		@endforeach
	</tbody>
</table>

</div>

@stop