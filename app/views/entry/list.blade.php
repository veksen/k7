@extends('master')

@section('main')

<div class="well">

<legend>Liste des idées</legend>

<table class="table table-striped table-hover">
	<thead>
		<tr>
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
		<tr>
			<td>{{ $entry->id }}</td>
			<td>{{ $entry->idea }}</td>
			<td>{{ $entry->email }}</td>
			<td>{{ $entry->firstname . $entry->lastname }}</td>
			<td>bon</td>
			<td>dsq</td>
			<td>del</td>
		</tr>
		@endforeach
	</tbody>
</table>

</div>

@stop