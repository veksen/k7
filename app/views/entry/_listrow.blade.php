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